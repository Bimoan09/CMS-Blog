@extends('masterfrontend::layouts.main')

@section('title', 'Profile')

<body class="app-ui layout-has-drawer layout-has-fixed-header">

    <main class="app-layout-content">

    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <div class="card card-profile">
                            <div class="card-profile-img bg-img" style="background-image: url({{asset('assets/img/misc/base_pages_profile_header_bg.jpg')}});">
                            </div>
                            <div class="card-block card-profile-block text-xs-center text-sm-left">
                                <img class="img-avatar img-avatar-96" src="{{asset('assets/img/avatars/avatar3.jpg')}}" alt="" />
                                <div class="profile-info font-500"> {{Auth::user()->name}}
                                    <div class="small text-muted m-t-xs">{{Auth::user()->email}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li class="active">
                                            <a href="#profile-tab1" data-toggle="tab">Account</a>
                                        </li>
                                        <li>
                                            <a href="#profile-tab2" data-toggle="tab">Security and privacy</a>
                                        </li>
                                        <li>
                                            <a href="#profile-tab3" data-toggle="tab">Password</a>
                                        </li>
                                        <li>
                                            <a href="#profile-tab4" data-toggle="tab">Order history</a>
                                        </li>
                                        <li>
                                            <a href="#profile-tab5" data-toggle="tab">Email notifications</a>
                                        </li>
                                        <li>
                                            <a href="#profile-tab6" data-toggle="tab">Followers</a>
                                        </li>
                                    </ul>
                                    <!-- .nav-tabs -->
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col-md-4 -->

                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-block tab-content">
                                        <!-- Profile tab 1 -->
                                        <div class="tab-pane fade in active" id="profile-tab1">
                                            <form class="fieldset">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone1">Mobile phone</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone2">Work phone</label>
                                                        <input type="datetime-local" class="form-control" id="exampleInputPhone2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 1 -->

                                        <!-- Profile tab 2 -->
                                        <div class="tab-pane fade" id="profile-tab2">
                                            <form class="fieldset">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone1">Mobile phone</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone2">Work phone</label>
                                                        <input type="datetime-local" class="form-control" id="exampleInputPhone2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 2 -->

                                        <!-- Profile tab 3 -->
                                        <div class="tab-pane fade" id="profile-tab3">
                                            <form class="fieldset">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone1">Mobile phone</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone2">Work phone</label>
                                                        <input type="datetime-local" class="form-control" id="exampleInputPhone2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 3 -->

                                        <!-- Profile tab 4 -->
                                        <div class="tab-pane fade" id="profile-tab4">
                                            <form class="fieldset">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone1">Mobile phone</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone1">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone2">Work phone</label>
                                                        <input type="datetime-local" class="form-control" id="exampleInputPhone2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 4 -->

                                        <!-- Profile tab 5 -->
                                        <div class="tab-pane fade" id="profile-tab5">
                                            <form class="fieldset">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone1">Mobile phone</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone2">Work phone</label>
                                                        <input type="datetime-local" class="form-control" id="exampleInputPhone2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 5 -->

                                        <!-- Profile tab 6 -->
                                        <div class="tab-pane fade" id="profile-tab6">
                                            <form class="fieldset">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone1">Mobile phone</label>
                                                        <input type="tel" class="form-control" id="exampleInputPhone1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPhone2">Work phone</label>
                                                        <input type="datetime-local" class="form-control" id="exampleInputPhone2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 6 -->

                                    </div>
                                    <!-- .card-block .tab-content -->
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col-md-8 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- End Page Content -->

    </main>

    <div class="app-ui-mask-modal"></div>
    <script>
        $(function () {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });

        $('#table').DataTable({
            "columnDefs": [{
                'targets': [0],
                'visible': true,
                'searchable': true,
            }]
        });
    </script>

</body>

</html>