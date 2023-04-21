var mapOptions = {
    zoom: 5,
    center: new google.maps.LatLng(47.8853, 23.0587),
    scaleControl: false,
    zoomControl: true,
    panControl: false,
    streetViewControl:false,
    mapTypeControl:true,
    scrollwheel: false,
    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]

};
map = new google.maps.Map(document.getElementById('map'), mapOptions);
var markerICON = {
    path: 'M 16 16 L 32 16 L 24 0 z',
    fillColor: '#ec3b2d',
    fillOpacity: 0.8,
    scale: 0.5,
    strokeColor: '#f80404',
    strokeWeight: 2
};

var infowindow0cdaadc7f30f24c = new google.maps.InfoWindow({
    content: "Country: <b>Hungary</b><br/>    Station code: <b>PSZI</b><br/>   Aperture: <b>0.25km</b><br>  No. of elements: <b>4</b><br/> Date of installation: <b>2017.05.25</b> <br/> co-located with  seismometer "
});

var marker0cdaadc7f30fa6a5324  = new google.maps.Marker({
    position: new google.maps.LatLng('47.92','19.89'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaadc7f30fa6a5324, 'click', function() {
    infowindow0cdaadc7f30f24c.open(map,marker0cdaadc7f30fa6a5324);
});




var infowindow0cdaa15e3wfdsf = new google.maps.InfoWindow({
    content: "Country: <b>Romania</b><br/>    Station code: <b>IPLOR</b><br/>   Aperture: <b>2.4 km</b><br>  No. of elements: <b>2009-2018 6, 2019-present 4</b><br/> Date of installation: <b>2009-2012</b> <br/> co-located with seismic array "
});

var marker0cdaadc7f30fadsfdsve  = new google.maps.Marker({
    position: new google.maps.LatLng('45.8512','26.6498'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaadc7f30fadsfdsve, 'click', function() {
    infowindow0cdaa15e3wfdsf.open(map,marker0cdaadc7f30fadsfdsve);
});




var infowindow0cdaasvsdvbfd = new google.maps.InfoWindow({
    content: "Country: <b>Romania</b><br/>    Station code: <b>BURARI</b><br/>   Aperture: <b>1.2 km</b><br>  No. of elements: <b>2016-2019 4, 2019-present 6</b><br/> Date of installation: <b>2016.07.27</b> <br/> co-located with seismic array "
});

var marker0cdaadc7f30sfwe4vber5e  = new google.maps.Marker({
    position: new google.maps.LatLng('47.6151','25.2159'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaadc7f30sfwe4vber5e, 'click', function() {
    infowindow0cdaasvsdvbfd.open(map,marker0cdaadc7f30sfwe4vber5e);
});




var infowindow0cdaafgrbtr3fgdsgdfs = new google.maps.InfoWindow({
    content: "Country: <b>Romania</b><br/>    Station code: <b>I67RO</b><br/>   Aperture: <b>0.9 km</b><br>  No. of elements: <b>4</b><br/> Date of installation: <b>2016.09.29.</b> <br/> PTS mobile temporary array co-located with NIEP seismometer"
});

var marker0cdaadc7f30sbgtrj342  = new google.maps.Marker({
    position: new google.maps.LatLng('46.6712','23.1224'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaadc7f30sbgtrj342, 'click', function() {
    infowindow0cdaafgrbtr3fgdsgdfs.open(map,marker0cdaadc7f30sbgtrj342);
});




var infowindow0cbnytjmtyjnmrgrbtr = new google.maps.InfoWindow({
    content: "Country: <b>Czech Republic</b><br/>    Station code: <b>PVCI</b><br/>   Aperture: <b>0.2 km</b><br>  No. of elements: <b>3</b><br/> Date of installation: <b>2014.04.13.</b> <br/> co-located with seismometer operated by Institute of Geophysics,CAS co-located with potential gradient (electric field) measurement"
});

var marker0rnrtr0sfb5434rf2  = new google.maps.Marker({
    position: new google.maps.LatLng('50.53','14.57'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0rnrtr0sfb5434rf2, 'click', function() {
    infowindow0cbnytjmtyjnmrgrbtr.open(map,marker0rnrtr0sfb5434rf2);
});

var infowindowewfdsfgrbtr = new google.maps.InfoWindow({
    content: "Country: <b>Czech Republic</b><br/>    Station code: <b>WBCI</b><br/>   Aperture: <b>6 km</b><br>  No. of elements: <b>4</b><br/> Date of installation: <b>2016.09.28.</b> <br/> co-located with seismometer operated by Institute of Geophysics,CAS co-located with potential gradient (electric field) measurement"
});

var marker0cdaaasdfasvcvcfb5434rf2  = new google.maps.Marker({
    position: new google.maps.LatLng('50.25','12.44'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaaasdfasvcvcfb5434rf2, 'click', function() {
    infowindowewfdsfgrbtr.open(map,marker0cdaaasdfasvcvcfb5434rf2);
});

var infowindow0cdbhyt56y45rbtr = new google.maps.InfoWindow({
    content: "Country: <b>Czech Republic</b><br/>    Station code: <b>Ionospheric Doppler Sounder</b><br/>   Aperture: <b>- km</b><br>  No. of elements: <b>5</b><br/> Date of installation: <b>2012.01</b> <br/> Complementary measurements to WBCI. Enables to observe infrasound in the ionosphere – extension of CEIN"
});

var marker0cdaadcfgbfgbngf434rf2  = new google.maps.Marker({
    position: new google.maps.LatLng('50.03','14.46'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaadcfgbfgbngf434rf2, 'click', function() {
    infowindow0cdbhyt56y45rbtr.open(map,marker0cdaadcfgbfgbngf434rf2);
});


var infowindow0cdbhdadsadw325rbtr = new google.maps.InfoWindow({
    content: "Country: <b>Austria</b><br/>    Station code: <b>ISCO</b><br/>   Aperture: <b>0.7 km</b><br>  No. of elements: <b>4</b><br/> Date of installation: <b>2021.01.04</b> <br/> mobile station"
});

var marker0cdaadcfgbfgbngf43dfsg434452354rf2  = new google.maps.Marker({
    position: new google.maps.LatLng("47.93", "15.87"),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0cdaadcfgbfgbngf43dfsg434452354rf2, 'click', function() {
    infowindow0cdbhdadsadw325rbtr.open(map,marker0cdaadcfgbfgbngf43dfsg434452354rf2);
});


var infowindow0MAAG1 = new google.maps.InfoWindow({
    content: "Country: <b>Ucraina</b><br/>    Station code: <b>MAAG1</b>"
});

var marker0MAAG1  = new google.maps.Marker({
    position: new google.maps.LatLng('50.7','29.23'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0MAAG1, 'click', function() {
    infowindow0MAAG1.open(map,marker0MAAG1);
});


var infowindow0MAAG2 = new google.maps.InfoWindow({
    content: "Country: <b>Ucraina</b><br/>    Station code: <b>MAAG2</b>"
});

var marker0MAAG2  = new google.maps.Marker({
    position: new google.maps.LatLng('48.56','26.46'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0MAAG2, 'click', function() {
    infowindow0MAAG2.open(map,marker0MAAG2);
});

var infowindow0GRDI = new google.maps.InfoWindow({
    content: "Country: <b>Ucraina</b><br/>    Station code: <b>GRDI</b>"
});

var marker0GRDI  = new google.maps.Marker({
    position: new google.maps.LatLng('50.6','29.45'),
    icon: markerICON,//'img/marker_icon.png',
    map: map
});

google.maps.event.addListener(marker0GRDI, 'click', function() {
    infowindow0GRDI.open(map,marker0GRDI);
});
