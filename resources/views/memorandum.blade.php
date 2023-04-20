@extends('layouts.main')

@section('content')
    <main role="main" class="row">
        <div class="col">
            <h3>Memorandum of Understanding</h3>
            <h4>Memorandum of Understanding for the collaboration of the Central and Eastern European Infrasound Network</h4>
            <p align="center">
                Between the
                GeoSphere Austria, Vienna, Austria,
                Institute of Atmospheric Physics of the Czech Academy of Sciences (CAS IAP), Prague, Czech Republic,
                Research Centre for Astronomy and Earth Sciences of the Hungarian Academy of Sciences (MTA CSFK), Budapest, Hungary,
                National Institute for Earth Physics (NIEP), Bucharest, Romania
            </p>

            <p>
                The parties have agreed to establish the Central and Eastern European Infrasound Network (CEEIN).
            </p>

            <p>
                The CEEIN currently consists of the following stations:
            </p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Country</th>
                    <th scope="col">Station code</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Lon</th>
                    <th scope="col">Aperture (km)</th>
                    <th scope="col">No. of elements</th>
                    <th scope="col">Date of installation</th>
                    <th scope="col">Other</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">Hungary</th>
                    <th scope="col">PSZI</th>
                    <th scope="col">47.92</th>
                    <th scope="col">19.89</th>
                    <th scope="col">0.25</th>
                    <th scope="col">4</th>
                    <th scope="col">2017.05.25.</th>
                    <th scope="col">co-located with  seismometer</th>
                </tr>
                <tr>
                    <th scope="col">Romania</th>
                    <th scope="col">IPLOR</th>
                    <th scope="col">45.8512</th>
                    <th scope="col">26.6498</th>
                    <th scope="col">2.4</th>
                    <th scope="col">6</th>
                    <th scope="col">2009-2012</th>
                    <th scope="col">co-located with seismic array</th>
                </tr>
                <tr>
                    <th scope="col">Romania</th>
                    <th scope="col">BURARI</th>
                    <th scope="col">47.6151</th>
                    <th scope="col">25.2159</th>
                    <th scope="col">1.2</th>
                    <th scope="col">4</th>
                    <th scope="col">2016.07.27.</th>
                    <th scope="col">co-located with seismic array</th>
                </tr>
                <tr>
                    <th scope="col">Romania</th>
                    <th scope="col">I67RO</th>
                    <th scope="col">46.6712</th>
                    <th scope="col">23.1224</th>
                    <th scope="col">0.9</th>
                    <th scope="col">4</th>
                    <th scope="col">2016.09.29.</th>
                    <th scope="col">PTS mobile temporary array co-located with NIEP seismometer</th>
                </tr>
                <tr>
                    <th scope="col">Czech Republic</th>
                    <th scope="col">PVCI</th>
                    <th scope="col">50.53</th>
                    <th scope="col">50.53</th>
                    <th scope="col">0.2</th>
                    <th scope="col">3</th>
                    <th scope="col">2014.04.13.</th>
                    <th scope="col">co-located with seismometer operated by Institute of Geophysics,CAS co-located with potential gradient (electric field) measurement</th>
                </tr>
                <tr>
                    <th scope="col">Czech Republic</th>
                    <th scope="col">WBCI</th>
                    <th scope="col">50.25</th>
                    <th scope="col">12.44</th>
                    <th scope="col">6</th>
                    <th scope="col">4</th>
                    <th scope="col">2016.09.28.</th>
                    <th scope="col">co-located with seismometer operated by Institute of Geophysics,CAS co-located with potential gradient (electric field) measurement</th>
                </tr>
                <tr>
                    <th scope="col">Hungary</th>
                    <th scope="col">PSZI</th>
                    <th scope="col">47.92</th>
                    <th scope="col">19.89</th>
                    <th scope="col">0.25</th>
                    <th scope="col">4</th>
                    <th scope="col">2017.05.25.</th>
                    <th scope="col">co-located with  seismometer</th>
                </tr>
                <tr>
                    <th scope="col">Czech Republic</th>
                    <th scope="col">Ionospheric Doppler Sounder</th>
                    <th scope="col">50.03</th>
                    <th scope="col">14.46</th>
                    <th scope="col">-</th>
                    <th scope="col">5</th>
                    <th scope="col">Data available from 2012.01</th>
                    <th scope="col">Czech Republic	Ionospheric Doppler Sounder	50.03	14.46		5	Data available from 2012.01	Complementary measurements to WBCI. Enables to observe infrasound in the ionosphere – extension of CEIN</th>
                </tr>
                <tr>
                    <th scope="col">Austria</th>
                    <th scope="col">ISCO</th>
                    <th scope="col">47.93</th>
                    <th scope="col">15.87</th>
                    <th scope="col">0.7</th>
                    <th scope="col">4</th>
                    <th scope="col">to be installed later in 2018</th>
                    <th scope="col">mobile station</th>
                </tr>
                </tbody>
            </table>

            <h5>The parties encourage the following activities in particular:</h5>
            <ul>
                <li>Form a working group within the upcoming ARISE IA framework.</li>
                <li>Real-time data exchange of infrasound records within the group and ARISE IA</li>
                <li>Production of the annual Central European Infrasound Bulletin</li>
                <li>
                    Collaboration in scientific research, such as
                    <ul>
                        <li>infrasound propagation in local and regional distances </li>
                        <li>study of seismo-acoustic sources using co-located seismic and infrasound instruments, i. e. explosions, landslides, avalanches and earthquakes</li>
                        <li>
                            identification of infrasound sources
                            <ul>
                                <li>bolides (in collaboration with the Institute of Astronomy of the MTA CSFK) </li>
                                <li>lightning and sprites (supplemented by the data of the sprite observation system of the MTA CSFK GGI, co-located potential gradient (electric field) measurements at PVCI and WBCI)</li>
                                <li>thunderstorms</li>
                                <li>mountain waves </li>
                            </ul>
                        </li>
                        <li>discrimination between natural and anthropogenic events</li>
                        <li>participating in the European volcano monitoring studies</li>
                        <li>jointly collecting of a list containing reference infragenic sources observed in Central and Eastern Europe (events of special interest)</li>
                        <li>vertical coupling between the ionosphere and lower atmosphere (based on WBCI data and Doppler sounding data)</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col">
            <ul>
                <li>
                    <a href="/docs/Memorandum_CEEIN_Ukr.pdf">Memorandum</a>
                </li>
            </ul>
        </div>
    </main>
@endsection
