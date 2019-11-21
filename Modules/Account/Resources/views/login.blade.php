@include('masterfrontend::layouts.main')
@include('masterfrontend::partials.header')
@include('masterfrontend::partials.loginHeader')
@include('masterfrontend::partials.alert')

<html class="app-ui">

<!-- Page content -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <!-- Login card -->
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header h4">Login</h3>
                    <div class="card-block">
                        <form action="{{route('post.login')}}" method="POST">
                         {{ csrf_field() }}
                            <div class="form-group">
                                <label class="sr-only" for="frontend_login_email">Email</label>
                                <input type="email" class="form-control" name ="email" id="frontend_login_email"
                                    placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="frontend_login_password">Password</label>
                                <input type="password" class="form-control" name="password" id="frontend_login_password"
                                    placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
                                    <input type="checkbox" id="frontend_login_remember" /><span></span>
                                    Remember me</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-app btn-block">Login</button>
                        </form>
                    </div>
                    <!-- .card-block -->
                </div>
                <!-- .card -->
            </div>
            <!-- .col-md-6 -->
            <!-- End login -->


        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- End page content -->


</main>

<!-- footer -->
@include('masterfrontend::partials.footer')
<!-- End footer -->

</div>
<!-- .app-layout-container -->
</div>
<!-- .app-layout-canvas -->




</body>

</html>
