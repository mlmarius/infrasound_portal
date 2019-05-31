/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import {Seismograph, d3} from "seisplotjs-waveformplot";
import {StationQuery, RSVP} from "seisplotjs-fdsnstation";
import {DataSelectQuery} from "seisplotjs-fdsndataselect";
import {model, byChannel, merge} from "seisplotjs-miniseed";
import moment from "moment";

require('./bootstrap');

const serverProtocol = 'http';
const serverHost = '195.189.145.35';
const serverPort = '8080';
const serverAddress = `${serverHost}:${serverPort}`;
const networkSelector = 'R1,HN';
const channelSelector = 'BDF';

let selectedStartDate;
let selectedEndDate;

var serverData = null;

DataSelectQuery.prototype.formURL = function(){
    let url = this.formBaseURL()+"/query?";
    if (this._networkCode) { url = url+this.makeParam("net", this.networkCode());}
    if (this._stationCode) { url = url+this.makeParam("sta", this.stationCode());}
    if (this._locationCode) { url = url+this.makeParam("loc", this.locationCode());}
    if (this._channelCode) { url = url+this.makeParam("cha", this.channelCode());}
    if (this._startTime) {
        let startTime = model.toIsoWoZ(this.startTime());
        startTime = startTime.substring(0, startTime.length - 4);
        url = url+'start='+startTime+'&';
    }
    if (this._endTime) {
        let endTime = model.toIsoWoZ(this.endTime());
        endTime = endTime.substring(0, endTime.length - 4);
        url = url+"end="+endTime+'&';
    }
    if (this._quality) { url = url+this.makeParam("quality", this.quality());}
    if (this._minimumLength) { url = url+this.makeParam("minimumlength", this.minimumLength());}
    if (this._repository) { url = url+this.makeParam("repository", this.repository());}
    if (this._longestOnly) { url = url+this.makeParam("longestonly", this.longestOnly());}
    if (this._format) { url = url+this.makeParam("format", this.format());}
    if (this._nodata) { url = url+this.makeParam("nodata", this.nodata());}

    if (url.endsWith('&') || url.endsWith('?')) {
        url = url.substr(0, url.length-1); // zap last & or ?
    }
    // return 'http://195.189.145.35:8080/fdsnws/dataselect/1/query?net=R1&sta=IPH2&start=2019-05-01T00:00:00&end=2019-05-01T01:30:00';
    return url;
};

function getAllStations(){
    const promise = new RSVP.Promise(function(resolve, reject){
        if(serverData != null){
            resolve(serverData.filter(function(item){
                if(selectedEndDate != undefined && item.startDate() > selectedEndDate){
                    return false;
                }
                return true;
            }));
        }
        else{
            new StationQuery(serverAddress)
                .protocol(serverProtocol)
                .networkCode(networkSelector)
                .channelCode(channelSelector)
                .queryChannels()
                .then(function(staml) {
                    function compare(a,b){
                        if(a.codes() > b.codes()){
                            return 1;
                        }
                        else if(a.codes() < b.codes()){
                            return -1;
                        }
                        return 0
                    }
                    serverData = staml.reduce(function(acc, val) {
                        if (val && val.stations) {
                            acc = acc.concat(val.stations());
                        }
                        return acc;
                    }, [] );

                    serverData = serverData.sort(compare);

                    if(serverData.length > 0){
                        serverData[0].__proto__.selected = function(val){
                            if(val == undefined){
                                if(this.isSelected == undefined){
                                    this.isSelected = false;
                                }
                            }
                            else{
                                this.isSelected = val;
                            }
                            return this.isSelected;
                        };
                    }
                    resolve(serverData);
                });
        }
    })
    return promise;
}

function dataSelect(net, sta, chan, startTime, endTime){
    const promise = new RSVP.Promise(function(resolve, reject){
        let request = new DataSelectQuery()
            .protocol(serverProtocol)
            .host(serverHost)
            .port(serverPort)
            .networkCode(net)
            .stationCode(sta)
            .channelCode(chan)
            .startTime(startTime)
            .endTime(endTime);

        console.log(request.formURL());
        const miniseed = request.query().then(function(dataRecords) {
            let byChannelData = byChannel(dataRecords);
            let keys = Array.from(byChannelData.keys());
            let segments = [];
            for(let i=0; i<keys.length; i++) {
                let key = keys[i];
                segments.push(merge(byChannelData.get(key)));
            }
            return segments;
        }).then(function(segments) {
            return {
                "segments": segments,
                "startDate": startTime,
                "endDate": endTime,
                "request": request,
                // "svgParent": svgParent
            };
        }, function(result) {
            // rejection, so no inSegments
            // but may need others to display message
            return {
                "segments": [],
                "startDate": start,
                "endDate": end,
                "request": request,
                // "svgParent": svgParent,
                "responseText": String.fromCharCode.apply(null, new Uint8Array(result.response)),
                "statusCode": result.status
            };
        });
        resolve(miniseed);
    });
    return promise;
}

function updateSelectedStationCount(val){
    let crt = parseInt($('#selectedStationCount').text());
    crt += val;
    if(crt == 0){
        $('#showStationsButton').addClass('disabled');
    }
    else{
        $('#showStationsButton').removeClass('disabled');
    }
    $('#selectedStationCount').text(crt);
}

function createTable(){
    let table;
    table = d3.select("div.stations")
        .select("table");
    if ( table.empty()) {
        table = d3.select("div.stations")
            .append("table");
        table.attr('class', 'table table-sm');
        table.attr('id', 'stationTable')
        var th = table.append("thead").attr('class', 'thead-dark').append("tr");
        th.append("th").text('Select');
        th.append("th").text("Code");
        th.append("th").text("Start");
        th.append("th").text("Lat,Lon");
        th.append("th").text("Elev");
        th.append("th").text("Restrict");
        th.append("th").text("Name");
        table.append("tbody");
    }
    return table;
}


function fillTable(allStations){
    const table = d3.select('#stationTable');
    var tableData = table.select("tbody")
        .selectAll("tr")
        .data(allStations, function(d) { return d.codes();});

    tableData.exit().remove();
    var tr = tableData.enter()
        .append("tr").classed('text-center', true);


    let btn = tr.append('td').append('a');
    btn.append('span')
        .attr('class', function(station){
            if(station.isSelected){
                return 'oi oi-check';
            }
            else{
                return 'oi oi-plus';
            }
        });

    btn.on("click", function(d) {
        const btn = d3.select(this);
        let crtIcon, otherIcon;
        d.selected(!d.selected());
        if(d.selected()){
            updateSelectedStationCount(1);
            crtIcon = 'oi-plus';
            otherIcon = 'oi-check';
        }
        else{
            updateSelectedStationCount(-1);
            crtIcon = 'oi-check';
            otherIcon = 'oi-plus';
        }
        btn.select('span').classed(crtIcon, false).classed(otherIcon, true);
    });
    tr.append("td")
        .text(function(d) {
            return d.codes();
        });
    tr.append("td")
        .text(function(d) {
            return d.startDate().toISOString();
        });
    tr.append("td")
        .text(function(d) {
            return "("+d.latitude()+", "+d.longitude()+")";
        });
    tr.append("td")
        .text(function(d) {
            return (d.elevation())+" m ";
        });
    tr.append("td")
        .text(function(d) {
            return d.restrictedStatus()+" ";
        });
    tr.append("td")
        .text(function(d) {
            return d.name()+" ";
        });
}


function plotStation(net, sta, channelSelector, from, to){
    console.log("plotting station", net, sta);
    dataSelect(net, sta, channelSelector, from, to)
        .then(function(result){
            let s = result.segments[0];
            let container = d3.select('.plot').append("div").attr('class', 'col-6');
            container.append('h3').text(`${net}.${sta}`).classed('text-center', true);
            let svgDiv = container.append("div").attr("style", "height:200px;");
            svgDiv.classed("svg-container-wide", true);
            try{
                let seismogram = new Seismograph(svgDiv, s, result.startDate, result.endDate);
                for ( let i=1; i< result.segments.length; i++) {
                    console.log(result.segments[i]);
                    seismogram.append(result.segments[i]);
                }
                //seismogram.setWidthHeight(1500,200);
                seismogram.draw();
            }
            catch (e) {
                svgDiv.append('p').attr('class', 'alert alert-warning').text('No data is available for this station and period.');
            }

        });
}

function refillTable(){
    console.log('refilling table');
    getAllStations().then(function(data){
        fillTable(data);
    });
}

$('#showStationsButton').click(function(){
    console.log(this);
    if(this.dataset['mode'] == 'list'){
        this.dataset['mode'] = 'charts';
        $(this).text('View stations');
        $('.stations').hide();
        showPlots();
    }
    else{
        this.dataset['mode'] = 'list';
        hidePlots();
        $(this).text('View plots');
        $('.stations').show();

    }
});

$('#downloadData').click(function(){
    getAllStations().then(function(allStations){
        let nas = allStations
            .filter(station => station.selected())
            .reduce(
                function (acc, val, idx, all) {
                    acc['networks'].add(val.network().codes());
                    let sta = val.codes().split('.')[1];
                    acc['stations'].add(sta);
                    return acc;
                },
                {'networks': new Set(), 'stations': new Set()}
            );

        let request = new DataSelectQuery()
            .protocol(serverProtocol)
            .host(serverHost)
            .port(serverPort)
            .networkCode(Array.from(nas['networks']).join(','))
            .stationCode(Array.from(nas['stations']).join(','))
            .channelCode(channelSelector)
            .startTime(moment('2019-05-01T10:30:00'))
            .endTime(moment('2019-05-01T11:30:00'));
        console.log(request.formURL());
        window.location.href = request.formURL();
    });
});

function showPlots(){
    $('.station-plots').show();
    getAllStations().then(function(allStations){
        allStations.filter(station => station.selected()).forEach(function(station){
            let net, sta;
            [net, sta] = station.codes().split('.');
            console.log(net, sta);
            // plotStation(net, sta, channelSelector, moment('2019-05-01T10:30:00'), moment('2019-05-01T11:30:00'));
            console.log(selectedStartDate);
            console.log(selectedEndDate);
            plotStation(net, sta, channelSelector, selectedStartDate, selectedEndDate);
        });
    });

}

function hidePlots(){
    d3.select('.plot').text('');
    $('.station-plots').hide();
}

$(function () {
    $('#datetimeFrom').datetimepicker();
    $('#datetimeFrom').on('hide.datetimepicker', function(event){
        selectedStartDate = event.date;
        refillTable();
    });
    $('#datetimeTo').datetimepicker();
    $('#datetimeTo').on('hide.datetimepicker', function(event){
        selectedEndDate = event.date;
        refillTable();
    });
});

const table = createTable();
getAllStations().then(allStations => fillTable(allStations));
d3.select('#filterStationsInput').on('keyup', function(){
    const text = this.value.trim();
    const regex = new RegExp("^.*" + text + ".*", "i");
    getAllStations().then(function(data){
        const searchResults = data.filter(station => regex.test(station.codes()) || regex.test(station.name())  );
        fillTable(searchResults);
    });
});

$.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
    icons: {
        time: 'oi oi-clock',
    } });
