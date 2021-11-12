@extends('layouts.main')

@section('content')
    <main role="main" class="row">
        <div class="col">
            <h3>Stations</h3>
            <div class="text-center">
                <table class="table table-striped">
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
