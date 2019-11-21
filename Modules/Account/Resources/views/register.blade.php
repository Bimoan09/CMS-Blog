  @include('masterfrontend::layouts.main')
  @include('masterfrontend::partials.header')
  @include('masterfrontend::partials.RegisterHeader')
  
  <!-- Sign up -->
  <div class="page-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <h3 class="card-header h4">Sign up</h3>
                      <div class="card-block">
                          <form class="form-horizontal" action="{{route('post.register')}}" method="POST">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <label class="sr-only" for="frontend_signup_username">Name</label>
                                      <input class="form-control" type="text" name="name" id="frontend_signup_name"
                                          placeholder="Name" />
                                  </div>
                                  <div class="col-sm-6">
                                      <label class="sr-only" for="frontend_signup_email">Email</label>
                                      <input class="form-control" type="email" name="email" id="frontend_signup_email"
                                          placeholder="Email" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-6">
                                      <label class="sr-only" for="frontend_signup_password">Password</label>
                                      <input class="form-control" type="password" name="password" id="frontend_signup_password"
                                          placeholder="Password" />
                                  </div>
                                  <div class="col-sm-6">
                                      <label class="sr-only" for="frontend_signup_confirm_password">Confirm
                                          Password</label>
                                      <input class="form-control" type="password" name="password_confirmation" id="frontend_signup_confirm_password"
                                          placeholder="Confirm password" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-xs-12">
                                      <label for="frontend_signup_terms" class="css-input switch switch-sm switch-app">
                                          <input type="checkbox" id="frontend_signup_terms"
                                              name="frontend_signup_terms" /><span></span> I agree with <a
                                              data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp;
                                              conditions</a>
                                      </label>
                                  </div>
                              </div>
                              <input type="hidden" id="username" name="username">
                              <button class="btn btn-app btn-block" type="submit">Sign Up</button>
                          </form>
                      </div>
                      <!-- .card-block -->
                  </div>
                  <!-- .card -->
              </div>
          </div>
      </div>
  </div>

 <!-- footer -->
@include('masterfrontend::partials.footer')
 <!-- End footer -->
