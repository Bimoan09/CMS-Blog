@extends('masterfrontend::layouts.mainAccount')


@section('content')
<body class="animsition page-login layout-full page-dark">

    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{asset('assets/remark/assets//images/logo.png')}}" alt="...">
                <h2 class="brand-text">Login</h2>
            </div>
            <p>@lang('general.log_in_account')</p>
            <form method="post" action="{{route('post.login')}}">
                {!! csrf_field() !!}
                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control empty" id="inputEmail" name="email">
                    <label class="floating-label" for="inputEmail">@lang('general.email')</label>
                </div>
                <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="password" class="form-control empty" id="inputPassword" name="password">
                    <label class="floating-label" for="inputPassword">@lang('general.password')</label>
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                        <input type="checkbox" id="inputCheckbox" name="remember">
                        <label for="inputCheckbox">Ingat saya</label>
                    </div>
                    <a class="float-right" href="forgot-password.html">@lang('general.forget_psswd')</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">@lang('general.login')</button>
            </form>
            <p>@lang('general.reg') <a href="register.html">Daftar</a></p>

            <footer class="page-copyright page-copyright-inverse">
                <p>WEBSITE BY Creation Studio</p>
                <p>© 2018. All RIGHT RESERVED.</p>
                <div class="social">
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-google-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>
    <!-- End Page -->
</body>
@stop
