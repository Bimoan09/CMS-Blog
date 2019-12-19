 <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="index.html"><img class="img-responsive" src="{{asset('assets/img/logo/logo-backend.png')}}" title="AppUI" alt="AppUI" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class="nav-item nav-drawer-header">Info</li>

                                <li class="nav-item active">
                                    <a href="index.html"><i class="ion-ios-speedometer-outline"></i> Beranda</a>
                                </li>

                                <li class="nav-item nav-drawer-header">Artikel</li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i>Artikel</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="{{route('member.artikel.index')}}">Daftar Artikel</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_cards.html">Buat Artikel</a>
                                        </li>
                                        <li>
                                            <a href="base_ui_cards.html">Pengaturan Artikel</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-compose-outline"></i> Kategori</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_forms_elements.html">Daftar Kategori</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_samples.html">Buat Kategori</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_pickers_select.html">Tags</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_validation.html">Pengaturan Kategori</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-list-outline"></i> Pengaturan Pendapatan</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_tables_styles.html">Pendapatan</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-browsers-outline"></i> Pengaturan Akun</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_pages_blank.html">Profile</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_inbox.html">Kata Sandi</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_invoice.html">Akun</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">CMS Template &copy;</p>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->