<header id="header" class="full-header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
      ============================================= -->
            <div id="logo">
                <a href="#" class="standar-logo" data-dark-logo="{{asset('depan/images/logofix2.png')}}"><img src="{{asset('depan/images/logofix2.png')}}" alt="Dropshipping" width="200" height="50"></a>
                <a href="#" class="retina-logo" data-dark-logo="{{asset('depan/images/logofix2.png')}}"><img src="{{asset('depan/images/logofix2.png')}}" alt="Dropshipping" width="200" height="50"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
      ============================================= -->
            <nav id="primary-menu">
                <ul>
                    <li class="{{active('beranda')}}"><a href="{{route('beranda')}}">
                            <div>Beranda</div>
                        </a>
                    </li>

                <li class="{{active('tentang_scraping')}}"><a href="{{route('tentang_scraping')}}">
                            <div>Tentang dan Cara Scraping</div>
                        </a>
                    </li>

                <li class="{{active('faq')}}"><a href="{{route('faq')}}">
                            <div>FAQ</div>
                        </a>
                    </li>

                <li class="{{active('mitra')}}"><a href="{{route('mitra')}}">
                        <div>User Scraping</div>
                    </a>
                </li>

                <li class="{{active('kontak_kami')}}"><a href="{{route('kontak_kami')}}">
                            <div>Kontak Kami</div>
                        </a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="dropdown dropdown-mega dropdown-mega-signin signin logged" id="headerAccount">
                    <a href="#">
                            <i class="icon-user4"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="mega-menu-content style-6 clearfix">
                        <div class="row_login">
                                <div class="col-md-8">
                                    <div class="user-avatar">
                                    <div class="img-thumbnail">

                                    @if (Auth::user()->id_role == '1')
                                    <img src="/uploads/avatars/{{Auth::user()->foto}}" alt="">


                                    @elseif (Auth::user()->id_role == '2')
                                    <img src="/uploads/avatars/{{Auth::user()->foto}}" alt="">

                                    @endif
                                    </div>
                                    <p><strong>{{ Auth::user()->name }}</strong><br>

                                    @if (Auth::user()->id_role == '1')
                                    <a href="{{route('superadmin')}}" class="role">{{ Auth::user()->name }}</a>

                                    @elseif (Auth::user()->id_role == '2')
                                    <a href="{{route('dropshipper')}}" class="role">{{ Auth::user()->name }}</a>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-account-options">
                                    <li>
                                        <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> Logout </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                        </li>
                        @else
                        <li class="dropdown dropdown-mega dropdown-mega-signin signin logged" id="headerAccount">
                                <a href="{{route('login')}}">
                                    <div><i class="icon-user4"></i>Login</div>
                                </a>
                            <div class="mega-menu-content style-6 clearfix">
                            <div class="row_login">    
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('login') }}" class="form-validate">
                                    {{csrf_field()}}
                                    <br>
                                    <h3>
                                        <center>SIGN IN</center>
                                    </h3>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <label for="login-form-username">Email Address</label>
                                        <input type="text" class="form-control not-dark" placeholder="Email" name="email" id="email" value="{{old('email')}}" style="width:100%;" />

                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <label for="login-form-password">Password</label> <a href="{{route('user.reset')}}" class="fright">Lupa Password?</a>
                                        <input type="password" name="password" id="password" class="form-control nont-dark" placeholder="Password" required="required" style="width:100%;" />
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label class="checkbox">
                                                <input type="checkbox" class="form-check-input">
                                                Remember
                                            </label>
                                        </div>

                                        <div class="col-md-6 tright">
                                            <button class="button button-small button-rounded button-aqua" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="fancy-title title-dotted-border title-center"><h4>Don't have an account?</h4></div>

                                    <center>
                                    <a href="{{route('userregister')}}" class="btn btn-primary btn-lg btn-block">Sign up</a>
                                    </center>
                                </form>
                            </div>
                            </div>
                        </div>   
                    </li>
                    @endauth
                    @endif
                </ul>

                <!-- Top Cart
        ============================================= -->
                <!-- #top-cart end -->

                <!-- Top Search
        ============================================= -->
                <!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>
    <script src="{{asset('global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_pages/login_validation.js')}}"></script>
</header>
