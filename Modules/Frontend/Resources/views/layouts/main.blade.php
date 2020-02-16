<!DOCTYPE html>
<html lang="en" dir="ltr">

    <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <title>@yield('title')</title>


            <!--webmag template -->
            <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">
            <link href="{{asset('assets/webmagFrontend/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('assets/webmagFrontend/css/font-awesome.min.css')}}" type="text/css"
                rel="stylesheet" />
            <link href="{{asset('assets/webmagFrontend/css/style.css')}}" type="text/css" rel="stylesheet" />
            <!-- End webmag template -->
        </head>


        @include('frontend::layouts.header')

        <body>
            @yield('content')
        </body>



        @yield('javascript')

        <script src="{{asset('assets/webmagFrontend/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/webmagFrontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/webmagFrontend/js/main.js')}}"></script>

        @yield('script')



    </html>
