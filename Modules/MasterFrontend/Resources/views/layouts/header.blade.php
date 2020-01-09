   <!-- Header -->
   <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
        data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{asset('assets/remark/assets/images/logo.png')}}" title="Remark">
        <span class="navbar-brand-text hidden-xs-down"> Remark</span>
      </div>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon md-search" aria-hidden="true"></i>
      </button>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float">
            <a class="nav-link icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
              role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
              aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-us"></span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-gb"></span> English</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-fr"></span> French</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-cn"></span> Chinese</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-de"></span> German</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-nl"></span> Dutch</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
              data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="{{asset('assets/remark/global/portraits/5.jpg')}}" alt="...">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-account"
                  aria-hidden="true"></i> Profile</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-card"
                  aria-hidden="true"></i> Billing</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings"
                  aria-hidden="true"></i> Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('post.logout')}}" role="menuitem"><i class="icon md-power"
                  aria-hidden="true"></i> Logout</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
              aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon md-notifications" aria-hidden="true"></i>
              <span class="badge badge-pill badge-danger up">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <div class="dropdown-menu-header">
                <h5>NOTIFICATIONS</h5>
                <span class="badge badge-round badge-danger">New 5</span>
              </div>

              <div class="list-group">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="dropdown-menu-footer">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon md-settings" aria-hidden="true"></i>
                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  All notifications
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
              aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon md-email" aria-hidden="true"></i>
              <span class="badge badge-pill badge-info up">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <div class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="badge badge-round badge-info">New 3</span>
              </div>

              <div class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="{{asset('assets/remark/global/portraits/2.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="{{asset('assets/remark/global/portraits/3.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2017-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="{{asset('assets/remark/global/portraits/4.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="pr-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="{{asset('assets/remark/global/portraits/5.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon md-settings" aria-hidden="true"></i>
                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  See all messages
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item" id="toggleChat">
            <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
              data-url="site-sidebar.tpl">
              <i class="icon md-comment" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>

  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" dropdown-badge="false">
                <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                <span class="site-menu-title">Artikel</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                <a class="animsition-link" href="{{route('member.artikel.create')}}">
                    <span class="site-menu-title">Buat Artikel</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{route('member.artikel.index')}}">
                    <span class="site-menu-title">Daftar Artikel</span>
                  </a>
                </li>
            </li>
          </ul>
          </li>
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)" dropdown-badge="false">
              <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
              <span class="site-menu-title">Pengaturan Pendapatan</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Errors</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/error-400.html">
                      <span class="site-menu-title">400</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/error-403.html">
                      <span class="site-menu-title">403</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/error-404.html">
                      <span class="site-menu-title">404</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/error-500.html">
                      <span class="site-menu-title">500</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/error-503.html">
                      <span class="site-menu-title">503</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/faq.html">
                  <span class="site-menu-title">FAQ</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/gallery.html">
                  <span class="site-menu-title">Gallery</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/gallery-grid.html">
                  <span class="site-menu-title">Gallery Grid</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/search-result.html">
                  <span class="site-menu-title">Search Result</span>
                </a>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Maps</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/map-google.html">
                      <span class="site-menu-title">Google Maps</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/map-vector.html">
                      <span class="site-menu-title">Vector Maps</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/maintenance.html">
                  <span class="site-menu-title">Maintenance</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/forgot-password.html">
                  <span class="site-menu-title">Forgot Password</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/lockscreen.html">
                  <span class="site-menu-title">Lockscreen</span>
                </a>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Login</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/login.html">
                      <span class="site-menu-title">Login</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/login-v2.html">
                      <span class="site-menu-title">Login V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/login-v3.html">
                      <span class="site-menu-title">Login V3</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Register</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/register.html">
                      <span class="site-menu-title">Register</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/register-v2.html">
                      <span class="site-menu-title">Register V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/register-v3.html">
                      <span class="site-menu-title">Register V3</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/user.html">
                  <span class="site-menu-title">User List</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/invoice.html">
                  <span class="site-menu-title">Invoice</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/blank.html">
                  <span class="site-menu-title">Blank Page</span>
                </a>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Email</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/email-articles.html">
                      <span class="site-menu-title">Articles</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/email-welcome.html">
                      <span class="site-menu-title">Welcome</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/email-post.html">
                      <span class="site-menu-title">Post</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/email-thumbnail.html">
                      <span class="site-menu-title">Thumbnail</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/email-news.html">
                      <span class="site-menu-title">News</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/code-editor.html">
                  <span class="site-menu-title">Code Editor</span>
                </a>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Profile</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/profile.html">
                      <span class="site-menu-title">Profile</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/profile-v2.html">
                      <span class="site-menu-title">Profile V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="pages/profile-v3.html">
                      <span class="site-menu-title">Profile V3</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/site-map.html">
                  <span class="site-menu-title">Sitemap</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="pages/project.html">
                  <span class="site-menu-title">Project</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)" dropdown-badge="false">
              <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
              <span class="site-menu-title">Pengaturan Akun</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Forms</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/general.html">
                      <span class="site-menu-title">General Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/material.html">
                      <span class="site-menu-title">Material Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/advanced.html">
                      <span class="site-menu-title">Advanced Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/layouts.html">
                      <span class="site-menu-title">Form Layouts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/wizard.html">
                      <span class="site-menu-title">Form Wizard</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/validation.html">
                      <span class="site-menu-title">Form Validation</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/masks.html">
                      <span class="site-menu-title">Form Masks</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Editors</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="forms/editor-summernote.html">
                          <span class="site-menu-title">Summernote</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="forms/editor-markdown.html">
                          <span class="site-menu-title">Markdown</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="forms/editor-ace.html">
                          <span class="site-menu-title">Ace Editor</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/image-cropping.html">
                      <span class="site-menu-title">Image Cropping</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="forms/file-uploads.html">
                      <span class="site-menu-title">File Uploads</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Tables</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/basic.html">
                      <span class="site-menu-title">Basic Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/bootstrap.html">
                      <span class="site-menu-title">Bootstrap Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/floatthead.html">
                      <span class="site-menu-title">floatThead</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/responsive.html">
                      <span class="site-menu-title">Responsive Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/editable.html">
                      <span class="site-menu-title">Editable Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/jsgrid.html">
                      <span class="site-menu-title">jsGrid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/footable.html">
                      <span class="site-menu-title">FooTable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/datatable.html">
                      <span class="site-menu-title">DataTables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/jqtabledit.html">
                      <span class="site-menu-title">Jquery Tabledit</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="tables/table-dragger.html">
                      <span class="site-menu-title">Table Dragger</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub ">
                <a href="javascript:void(0)">
                  <span class="site-menu-title">Chart</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/chartjs.html">
                      <span class="site-menu-title">Chart.js</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/gauges.html">
                      <span class="site-menu-title">Gauges</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/flot.html">
                      <span class="site-menu-title">Flot</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/peity.html">
                      <span class="site-menu-title">Peity</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/sparkline.html">
                      <span class="site-menu-title">Sparkline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/morris.html">
                      <span class="site-menu-title">Morris</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/chartist.html">
                      <span class="site-menu-title">Chartist.js</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/rickshaw.html">
                      <span class="site-menu-title">Rickshaw</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/pie-progress.html">
                      <span class="site-menu-title">Pie Progress</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="charts/c3.html">
                      <span class="site-menu-title">C3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          </ul>
        </div>
      </div>
    </div>
  </div>