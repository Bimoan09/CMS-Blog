@extends('masterfrontend::layouts.main')

@section('title', 'List Artikel')


@section('content')
<body class="animsition site-navbar-small ">
<!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">DataTables</h1>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('member.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Artikel</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="http://datatables.net" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Buat Artikel</span>
                </a>
            </div>
        </div>

        <div class="page-content">

            <!-- Panel Table Individual column searching -->
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Daftar Artikel</h3>
                </header>
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" id="exampleTableSearch">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Kate</td>
                                <td>5516 Adolfo Rode</td>
                                <td>Littelhaven</td>
                                <td>26</td>
                                <td>2014/06/13</td>
                                <td>$635,852</td>
                            </tr>
                            <tr>
                                <td>Torrey</td>
                                <td>3658 Richie Street</td>
                                <td>West Sedrickstad</td>
                                <td>28</td>
                                <td>2014/09/12</td>
                                <td>$243,577</td>
                            </tr>
                            <tr>
                                <td>Jolin</td>
                                <td>39 Hirthe Squares</td>
                                <td>Ryleetown</td>
                                <td>17</td>
                                <td>2013/09/27</td>
                                <td>$784,802</td>
                            </tr>
                            <tr>
                                <td>Wilhelmine</td>
                                <td>054 O&#x27;Hara Union</td>
                                <td>Dibbertfurt</td>
                                <td>35</td>
                                <td>2013/06/28</td>
                                <td>$254,987</td>
                            </tr>
                            <tr>
                                <td>Hubeen</td>
                                <td>8884 Jamel Pines</td>
                                <td>Howemouth</td>
                                <td>51</td>
                                <td>2013/05/28</td>
                                <td>$584,032</td>
                            </tr>
                            <tr>
                                <td>Gerhold</td>
                                <td>098 Noel Way</td>
                                <td>Santinoland</td>
                                <td>19</td>
                                <td>2014/12/12</td>
                                <td>$145,088</td>
                            </tr>
                            <tr>
                                <td>Chester</td>
                                <td>14095 Kling Gateway</td>
                                <td>Andresmouth</td>
                                <td>21</td>
                                <td>2014/09/27</td>
                                <td>$177,404</td>
                            </tr>
                            <tr>
                                <td>Melany</td>
                                <td>1100 Steve Pines</td>
                                <td>Immanuelfort</td>
                                <td>12</td>
                                <td>2014/06/28</td>
                                <td>$162,453</td>
                            </tr>
                            <tr>
                                <td>Thea</td>
                                <td>26114 Narciso Lodge</td>
                                <td>East Opal</td>
                                <td>64</td>
                                <td>2014/11/12</td>
                                <td>$581,736</td>
                            </tr>
                            <tr>
                                <td>Kreiger</td>
                                <td>111 Hershel Stream</td>
                                <td>Hermannborough</td>
                                <td>36</td>
                                <td>2013/11/27</td>
                                <td>$921,021</td>
                            </tr>
                            <tr>
                                <td>Shanel</td>
                                <td>7579 Santa Forest</td>
                                <td>Jordaneville</td>
                                <td>14</td>
                                <td>2017/04/28</td>
                                <td>$818,20</td>
                            </tr>
                            <tr>
                                <td>Mueller</td>
                                <td>083 Kshlerin Forest</td>
                                <td>Clintmouth</td>
                                <td>18</td>
                                <td>2013/10/12</td>
                                <td>$571,46</td>
                            </tr>
                            <tr>
                                <td>Clementina</td>
                                <td>5957 Hagenes Falls</td>
                                <td>Anaishaven</td>
                                <td>45</td>
                                <td>2013/11/12</td>
                                <td>$684,588</td>
                            </tr>
                            <tr>
                                <td>Johanna</td>
                                <td>4301 Trever Radial</td>
                                <td>Lake Augustineton</td>
                                <td>67</td>
                                <td>2013/12/27</td>
                                <td>$608,507</td>
                            </tr>
                            <tr>
                                <td>Elliottr</td>
                                <td>8417 Orion Parkway</td>
                                <td>Streichside</td>
                                <td>34</td>
                                <td>2014/08/28</td>
                                <td>$447,592</td>
                            </tr>
                            <tr>
                                <td>Yasmine</td>
                                <td>67284 Kreiger Freeway</td>
                                <td>Stoltenbergside</td>
                                <td>18</td>
                                <td>2014/12/12</td>
                                <td>$358,369</td>
                            </tr>
                            <tr>
                                <td>AdaHoppe</td>
                                <td>69842 Peyton Viaduct</td>
                                <td>South Geovannyburgh</td>
                                <td>36</td>
                                <td>2013/05/13</td>
                                <td>$211,76</td>
                            </tr>
                            <tr>
                                <td>Sammie</td>
                                <td>46406 Powlowski Common</td>
                                <td>Cristmouth</td>
                                <td>51</td>
                                <td>2014/03/29</td>
                                <td>$345,739</td>
                            </tr>
                            <tr>
                                <td>Terrance</td>
                                <td>1568 Richmond Bypass</td>
                                <td>Schillerfort</td>
                                <td>46</td>
                                <td>2014/10/27</td>
                                <td>$634,073</td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td>731 Stiedemann Crossing</td>
                                <td>Rolfsonborough</td>
                                <td>36</td>
                                <td>2013/11/12</td>
                                <td>$203,952</td>
                            </tr>
                            <tr>
                                <td>Mckenna</td>
                                <td>63204 Hegmann Keys</td>
                                <td>New Isobelview</td>
                                <td>2</td>
                                <td>2013/08/12</td>
                                <td>$702,091</td>
                            </tr>
                            <tr>
                                <td>Adrianna</td>
                                <td>75151 Kshlerin Square</td>
                                <td>North Elwynfurt</td>
                                <td>25</td>
                                <td>2014/02/26</td>
                                <td>$481,980</td>
                            </tr>
                            <tr>
                                <td>Heath</td>
                                <td>6778 Howe Route</td>
                                <td>Antwanbury</td>
                                <td>32</td>
                                <td>2013/08/12</td>
                                <td>$569,723</td>
                            </tr>
                            <tr>
                                <td>Alisa</td>
                                <td>64838 D&#x27;Amore Cove</td>
                                <td>Port Lempi</td>
                                <td>25</td>
                                <td>2017/04/28</td>
                                <td>$226,459</td>
                            </tr>
                            <tr>
                                <td>Treva</td>
                                <td>308 Octavia Roads</td>
                                <td>East Eunaton</td>
                                <td>37</td>
                                <td>2014/12/12</td>
                                <td>$746,921</td>
                            </tr>
                            <tr>
                                <td>Nicolas</td>
                                <td>760 Hickle Causeway</td>
                                <td>Lake Nickolasshire</td>
                                <td>69</td>
                                <td>2014/05/13</td>
                                <td>$293,786</td>
                            </tr>
                            <tr>
                                <td>Gerhard</td>
                                <td>893 Mara Parkway</td>
                                <td>Elmermouth</td>
                                <td>32</td>
                                <td>2014/11/27</td>
                                <td>$856,275</td>
                            </tr>
                            <tr>
                                <td>Monica</td>
                                <td>0039 Heath Plain</td>
                                <td>West Bentonhaven</td>
                                <td>46</td>
                                <td>2017/05/13</td>
                                <td>$821,600</td>
                            </tr>
                            <tr>
                                <td>Lacey</td>
                                <td>995 Lang Springs</td>
                                <td>Cordellburgh</td>
                                <td>41</td>
                                <td>2014/11/27</td>
                                <td>$990,291</td>
                            </tr>
                            <tr>
                                <td>Bret</td>
                                <td>282 Susana Heights</td>
                                <td>Kaneport</td>
                                <td>47</td>
                                <td>2013/05/28</td>
                                <td>$445,494</td>
                            </tr>
                            <tr>
                                <td>Jennie</td>
                                <td>755 Greyson Key</td>
                                <td>East Jazmyne</td>
                                <td>52</td>
                                <td>2017/03/29</td>
                                <td>$530,408</td>
                            </tr>
                            <tr>
                                <td>Emerson</td>
                                <td>784 Adriel Radial</td>
                                <td>New Jerroldland</td>
                                <td>4</td>
                                <td>2014/02/26</td>
                                <td>$805,823</td>
                            </tr>
                            <tr>
                                <td>Herta</td>
                                <td>7491 Bednar Gardens</td>
                                <td>Port Lucianoton</td>
                                <td>23</td>
                                <td>2013/10/12</td>
                                <td>$352,269</td>
                            </tr>
                            <tr>
                                <td>Deckow</td>
                                <td>6440 Moen Loop</td>
                                <td>Jenningsbury</td>
                                <td>23</td>
                                <td>2014/07/28</td>
                                <td>$219,573</td>
                            </tr>
                            <tr>
                                <td>Davin</td>
                                <td>50922 Kiara Square</td>
                                <td>Port Edmund</td>
                                <td>37</td>
                                <td>2014/11/27</td>
                                <td>$241,432</td>
                            </tr>
                            <tr>
                                <td>Johnathan</td>
                                <td>1998 Webster Fords</td>
                                <td>East Vern</td>
                                <td>50</td>
                                <td>2014/09/12</td>
                                <td>$290,875</td>
                            </tr>
                            <tr>
                                <td>Gunnar</td>
                                <td>92873 Barney Club</td>
                                <td>Beierview</td>
                                <td>82</td>
                                <td>2014/03/29</td>
                                <td>$569,778</td>
                            </tr>
                            <tr>
                                <td>Raina</td>
                                <td>828 Cathy Streets</td>
                                <td>West Uriahville</td>
                                <td>26</td>
                                <td>2013/09/27</td>
                                <td>$186,229</td>
                            </tr>
                            <tr>
                                <td>Marjorie</td>
                                <td>314 Aurore Canyon</td>
                                <td>Port Jaquelineburgh</td>
                                <td>3</td>
                                <td>2014/06/28</td>
                                <td>$547,752</td>
                            </tr>
                            <tr>
                                <td>Citlalli</td>
                                <td>139 Ebert Freeway</td>
                                <td>Lake Esperanzamouth</td>
                                <td>78</td>
                                <td>2017/01/27</td>
                                <td>$892,012</td>
                            </tr>
                            <tr>
                                <td>Ruben</td>
                                <td>02868 Cronin Tunnel</td>
                                <td>Rossieville</td>
                                <td>87</td>
                                <td>2013/09/12</td>
                                <td>$520,483</td>
                            </tr>
                            <tr>
                                <td>Jakubowski</td>
                                <td>80391 Maxwell Parks</td>
                                <td>South Travon</td>
                                <td>26</td>
                                <td>2014/03/29</td>
                                <td>$272,005</td>
                            </tr>
                            <tr>
                                <td>Josephine</td>
                                <td>36238 Satterfield Avenue</td>
                                <td>New Alexanderhaven</td>
                                <td>51</td>
                                <td>2017/01/27</td>
                                <td>$189,18</td>
                            </tr>
                            <tr>
                                <td>Ceasar</td>
                                <td>2795 Clement Ridges</td>
                                <td>Beckerhaven</td>
                                <td>78</td>
                                <td>2013/11/27</td>
                                <td>$958,117</td>
                            </tr>
                            <tr>
                                <td>Coby</td>
                                <td>53700 Pagac Lodge</td>
                                <td>South Hershel</td>
                                <td>86</td>
                                <td>2013/08/28</td>
                                <td>$481,619</td>
                            </tr>
                            <tr>
                                <td>Colin</td>
                                <td>637 Paucek Mountain</td>
                                <td>West Luraberg</td>
                                <td>77</td>
                                <td>2017/02/26</td>
                                <td>$298,110</td>
                            </tr>
                            <tr>
                                <td>Monique</td>
                                <td>415 Corkery Walks</td>
                                <td>West Lauryn</td>
                                <td>15</td>
                                <td>2014/02/11</td>
                                <td>$222,343</td>
                            </tr>
                            <tr>
                                <td>Simonis</td>
                                <td>0778 Elvis Spurs</td>
                                <td>Harrisfurt</td>
                                <td>62</td>
                                <td>2013/05/28</td>
                                <td>$336,046</td>
                            </tr>
                            <tr>
                                <td>Afton</td>
                                <td>57724 Ernser Crossroad</td>
                                <td>Lake Charity</td>
                                <td>30</td>
                                <td>2017/04/28</td>
                                <td>$597,775</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Panel Table Individual column searching -->

        </div>
    </div>
    <!-- End Page -->
</body>
@endsection
