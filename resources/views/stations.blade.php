@extends('layouts.main')

@section('content')
    <main role="main" class="row">
        <div class="col">
            <h3>Stations</h3>
            <div class="text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Station</th>
                            <th>Country</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>No of sensors</th>
                            <th>Type of sensors</th>
                            <th>Aperture (km)</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ISCO</td>
                            <td>Austria</td>
                            <td>48.73</td>
                            <td>15.57</td>
                            <td>4</td>
                            <td>Hyperion IFS-3000</td>
                            <td>0.36</td>
                            <td>2020/10/30</td>
                            <td>2020/11/06</td>
                        </tr>
                        <tr>
                            <td>ISCO</td>
                            <td>Austria</td>
                            <td>47.93</td>
                            <td>15.87</td>
                            <td>4</td>
                            <td>Hyperion IFS-3000</td>
                            <td>1.11</td>
                            <td>2021/01/04</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                ISCO is maintained by GeoSphere Austria. The array is located in a mountainous area at the Trafelberg in Lower Austria (47.9258N, 15.8659E, 1065 m a.s.l.), within the premises of the Conrad Observatory. It was installed 2021. The array consists of four elements arranged in a nearly equilateral triangle and a central station. The array aperture is 1000 m. The four elements ICH1 – ICH4 of the ISCO array are equipped with Hyperion IFS 3000 sensors and sara® dataloggers. A sampling rate of 20 Hz was selected. Noise reduction is applied by porous hoses. Power is supplied by batteries, fuel cells, and solar panels.
                            </td>
                        </tr>
                        <tr>
                            <td>PVCI</td>
                            <td>Czechia</td>
                            <td>50.53</td>
                            <td>14.57</td>
                            <td>3</td>
                            <td>The Scientific and Technical Centre “Geophysical Measurements” ISGM03</td>
                            <td>0.20</td>
                            <td>2014/05/01</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                PVCI (<a href="https://doi.org/10.7914/SN/C9" target="_blank" rel="noopener noreferrer">https://doi.org/10.7914/SN/C9</a>) is maintained by the Institute of Atmospheric Physics of the Czech Academy of Sciences. The array is located on a grassy plot of the observatory Panska Ves (50.53N 14.57E, 315 m a.s.l.) in Northern Bohemia. The array consists of three elements arranged in a nearly equilateral triangle. The array aperture is 200 m. The sensors are placed in closed insulated boxes which also serve as a protection against the wind noise. However, the station is sensitive to wind speeds higher than 2 m∙s<sup>-1</sup>. The station was equipped with differential microbarometers ISGM03 from 2014 to October 2023. Since the station upgrade in October 2023, three absolute microbarometers 6000-16B-IS-LN, Paroscientific, Inc. have been deployed.
                            </td>
                        </tr>
                        <tr>
                            <td>WBCI</td>
                            <td>Czechia</td>
                            <td>50.25</td>
                            <td>12.44</td>
                            <td>4</td>
                            <td>Paroscientific 6000-16 B-IS</td>
                            <td>6.00</td>
                            <td>2016/09/28</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                WBCI (<a href="https://doi.org/10.7914/SN/C9" target="_blank" rel="noopener noreferrer">https://doi.org/10.7914/SN/C9</a>) is maintained by the Institute of Atmospheric Physics of the Czech Academy of Sciences. The array is located in Western Bohemia (barycenter at 50.25N 12.433E); the sensors are co-located with seismometers (VAC, LBC, NKC, and STC) of the local seismic network WEBNET (<a href="https://doi.org/10.7914/SN/WB" target="_blank" rel="noopener noreferrer">https://doi.org/10.7914/SN/WB</a>) operated by the Institute of Geophysics of the Czech Academy of Sciences. The array consists of four elements. Its aperture is large; inter-element distances range from 4 km to 10 km. Thus, WBCI is mainly suitable for observations of gravity waves. Its utilization in infrasound studies is limited. The sensors are placed in closed insulated boxes which also serve as a protection against the wind noise. The station was deployed in 2016. It is equipped with absolute microbarometers 6000-16B-IS, Paroscientific, Inc.
                            </td>
                        </tr>
                        <tr>
                            <td>PSZI</td>
                            <td>Hungary</td>
                            <td>47.92</td>
                            <td>19.89</td>
                            <td>4</td>
                            <td>SeismoWave MB3d</td>
                            <td>0.25</td>
                            <td>2017/05/25</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                PSZI (<a href="https://doi.org/10.14470/UA114590" target="_blank" rel="noopener noreferrer">https://doi.org/10.14470/UA114590</a>) is maintained by the HUN-REN Institute of Earth Physics and Space Science, Kövesligethy Radó Seismological Observatory (KRSO). 
                                The station is located on the top of Piszkés-tető (944m) in the Mátra Mountains, Northern Hungary and is equipped with four SeismoWave MB3d microbarometers. 
                                The array elements are buried in the ground and porous hoses serve as a noise reduction system, also three out of four instruments are within a forested area which further reduces the wind noise. 
                                PSZI1 is co-located with a seismometer (PSZ, operated by KRSO and GEOFON program), which creates a great opportunity for seismo-acoustic studies as the mining activity is high within the Mátra region (e.g., Czanik et al., 2021). 
                                The biggest coherent noise source is the Mátra Power Plant at 20 km distance with an azimuth of 139°.
                            </td>
                        </tr>
                        <tr>
                            <td>BURAR</td>
                            <td>Romania</td>
                            <td>47.62</td>
                            <td>25.22</td>
                            <td>4</td>
                            <td>Chaparral Physics Model 21</td>
                            <td>0.60</td>
                            <td>2016/07/28</td>
                            <td>2019/09/20</td>
                        </tr>
                        <tr>
                            <td>BURAR</td>
                            <td>Romania</td>
                            <td>47.62</td>
                            <td>25.22</td>
                            <td>6</td>
                            <td>Hyperion IFS-5113</td>
                            <td>0.69</td>
                            <td>2019/09/21</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                BURARI (<a href="https://doi.org/10.7914/SN/R1" target="_blank" rel="noopener noreferrer">https://doi.org/10.7914/SN/R1</a>) is maintained by National Institute for Earth Physics (NIEP), Romania. The station is located in northern Romania, at Benea (Suceava County). Initially, BURARI was deployed in July 2016 as a temporary infrasonic array with four elements equipped with Chaparral Physics model 21 sensors and distributed over an aperture of 1.2 km. In September 2019, BURARI became a permanent station with a redesigned configuration of 6 elements equipped with Hyperion 5113/A microbarometers and distributed over an aperture of 0.7 km. WRNS at each of the BURARI array comprises a 32-air inlets star design with flexible hoses and 18m diameter. Infrasound data are locally collected and transmitted in real time to NIEP Data Centre, in Măgurele.
                            </td>
                        </tr>
                        <tr>
                            <td>IPLOR</td>
                            <td>Romania</td>
                            <td>45.85</td>
                            <td>26.65</td>
                            <td>6</td>
                            <td>Chaparral Physics Model 25</td>
                            <td>2.43</td>
                            <td>2009/05/28</td>
                            <td>2018/11/09</td>
                        </tr>
                        <tr>
                            <td>IPLOR</td>
                            <td>Romania</td>
                            <td>45.85</td>
                            <td>26.65</td>
                            <td>4</td>
                            <td>Chaparral Physics Model 25</td>
                            <td>0.49</td>
                            <td>2019/12/13</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                IPLOR (<a href="https://doi.org/10.7914/SN/R1" target="_blank" rel="noopener noreferrer">https://doi.org/10.7914/SN/R1</a>) is maintained by National Institute for Earth Physics (NIEP), Romania. The station is located in central Romania, at Plostina (Vrancea County). Starting with June 2009, IPLOR array consisted of three elements equipped with Chaparral Physics model 25 sensors; in 2010, the fourth element was added, and then, during 2012, two more sensors were installed, the station configuration reaching 6 elements distributed in a 2.5 km aperture. In December 2019, following a modernization process, IPLOR station configuration was resized to four elements equipped with Chaparral Physics model 25 sensors and distributed in a 0.6 km aperture. WNRS consists of rosette array design using flexible high-pressure hydraulic hoses. Infrasound data are locally collected and transmitted in real time to NIEP Data Centre, in Măgurele.
                            </td>
                        </tr>
                        <tr>
                            <td>I67RO</td>
                            <td>Romania</td>
                            <td>46.67</td>
                            <td>23.12</td>
                            <td>4</td>
                            <td>SeismoWave MB2005</td>
                            <td>0.95</td>
                            <td>2016/09/27</td>
                            <td>2018/10/18</td>
                        </tr>
                        <tr>
                            <td colspan="9" class="text-justify text-muted font-italic px-5">
                                I67RO (<a href="https://doi.org/10.7914/SN/R1" target="_blank" rel="noopener noreferrer">https://doi.org/10.7914/SN/R1</a>) was in operation between September 2016 and October 2018 as temporary mobile infrasonic array, and it was located in western Romania, at Mărişel (Cluj County). The station was part of a scientific collaboration project between the NIEP and the Provisional Technical Secretariat (PTS) of the Comprehensive Nuclear-Test-Ban Treaty Organization (CTBTO). I67RO array consisted of four elements equipped with MB2005 microbarometers (CEA/DAM) distributed over an aperture of 0.9 km. WNRS consisted of 15 m porous hoses. Infrasound data were locally saved and stored using digital flash memory cards.
                            </td>
                        </tr>
                        <tr>
                            <td>MAAG1</td>
                            <td>Ukraine</td>
                            <td>50.70</td>
                            <td>29.23</td>
                            <td>3</td>
                            <td>Broadband microbarometers K-304</td>
                            <td>0.16</td>
                            <td>2006/09</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td>MAAG2</td>
                            <td>Ukraine</td>
                            <td>48.56</td>
                            <td>26.46</td>
                            <td>4</td>
                            <td>Broadband microbarometers K-304</td>
                            <td>0.16</td>
                            <td>2007/05</td>
                            <td>Now</td>
                        </tr>
                        <tr>
                            <td>GRDI</td>
                            <td>Ukraine</td>
                            <td>50.60</td>
                            <td>29.45</td>
                            <td>4</td>
                            <td>DI digital sensor</td>
                            <td>0.40</td>
                            <td>2020/07</td>
                            <td>Now</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center">
                    CEEIN stations
                </p>
            </div>
        </div>
    </main>
@endsection
