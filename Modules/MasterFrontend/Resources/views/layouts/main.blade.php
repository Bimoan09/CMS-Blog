<!DOCTYPE html>
<html lang="en" dir="ltr">

    <html>

        <head>
            <!-- Meta -->
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

            <!-- Document title -->
            <title>@yield('title')</title>

            <meta name="description" content="AppUI - Frontend Template & UI Framework" />
            <meta name="robots" content="noindex, nofollow" />

            <!-- Favicons -->
            <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
            <link rel="icon" href="assets/img/favicons/favicon.ico" />

            <!-- Google fonts -->
            <link rel="stylesheet"
                href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />


            <!--Remark template -->
            <link href="{{asset('assets/remark/global/css/bootstrap.min.css')}}" rel="stylesheet" id="css-ionicons"
                type="text/css" />
            <link href="{{asset('assets/remark/global/css/bootstrap-extend.min.css')}}" rel="stylesheet"
                id="css-ionicons" type="text/css" />
            <link href="{{asset('assets/remark/assets/css/site.min.css')}}" rel="stylesheet" id="css-ionicons"
                type="text/css" />
            <link href="{{asset('assets/remark/global/vendor/animsition/animsition.css')}}" rel="stylesheet"
                id="css-ionicons" type="text/css" />
            <link href="{{asset('assets/remark/assets/examples/css/dashboard/v1.css')}}" rel="stylesheet"
                id="css-ionicons" type="text/css" />
            <link href="{{asset('assets/remark/global/fonts/material-design/material-design.min.css')}}"
                rel="stylesheet" id="css-ionicons" type="text/css" />
            <link href="{{asset('assets/remark/global/fonts/brand-icons/brand-icons.min.css')}}" rel="stylesheet"
                id="css-ionicons" type="text/css" />
            <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
            <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
            <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
            <link href="{{asset('assets/remark/assets/examples/css/pages/login.css')}}" rel="stylesheet"
            id="css-ionicons" type="text/css" />
            <link rel="stylesheet" href="{{asset('assets/remark/assets/vendor/select2/select2.css')}}">
            <!-- End Remark template -->


            <!--Datatables -->
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
            <link rel="stylesheet"
                href="{{asset('assets/remark/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
            <link rel="stylesheet" href="{{asset('assets/remark/assets/examples/css/tables/datatable.css')}}">
            <!-- End Datatables -->
            <script src="{{asset('assets/remark/global/vendor/breakpoints/breakpoints.js')}}"></script>
            <script>
                Breakpoints();
            </script>
        </head>

        {{-- @include('masterfrontend::layouts.sidenav') --}}

        @include('masterfrontend::layouts.header')

        <main class="app-layout-content">
            @yield('content')
        </main>



        @yield('javascript')

        <script src="{{asset('assets/remark/global/vendor/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/babel-external-helpers/babel-external-helpers.js')}}">
        </script>

        <script src="{{asset('assets/remark/global/vendor/popper-js/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/animsition/animsition.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>

        <!-- Page plugin -->
        <script src="{{asset('assets/remark/global/vendor/switchery/switchery.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/intro-js/intro.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/screenfull/screenfull.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/chartist/chartist.min.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

        <script src="{{asset('assets/remark/global/js/Component.js')}}"></script>
        <script src="{{asset('assets/remark/global/js/Plugin.js')}}"></script>
        <script src="{{asset('assets/remark/global/js/Base.js')}}"></script>
        <script src="{{asset('assets/remark/global/js/Config.js')}}"></script>

        <script src="{{asset('assets/remark/assets/js/Section/Menubar.js')}}"></script>
        <script src="{{asset('assets/remark/assets/js/Section/Sidebar.js')}}"></script>

        <script src="{{asset('assets/remark/assets/js/Site.js')}}"></script>
        <script src="{{asset('assets/remark/assets/examples/js/dashboard/v1.js')}}"></script>
        <script src="{{asset('assets/remark/assets/vendor/formvalidation/formValidation.min.js')}}"></script>
        <script src="{{asset('assets/remark/assets/vendor/formvalidation/framework/bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/remark/assets/examples/js/forms/validation.js')}}"></script>
        <script src="{{asset('assets/remark/assets/vendor/select2/select2.full.min.js')}}"></script>
        
        <!-- Datatables -->
        <script src="{{asset('assets/remark/global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/remark/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>

            <script src = "{{asset('assets/remark/global/js/Plugin/datatables.js')}}" >
        </script>
        <script src="{{asset('assets/remark/assets/examples/js/tables/datatable.js')}}"></script>
      
        <!-- End Datatables -->





        {{-- <script type="text/javascript" src="{{asset('/js/ckfinder/ckfinder.js')}}"></script>
        <script>
            CKFinder.config({
                connectorPath: '/ckfinder/connector'
            });
        </script> --}}
        @yield('script')



    </html>
