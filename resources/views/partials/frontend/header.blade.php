<header class="main_header home_four">
    <div class="container-fulid">
        <div class="header_outer_box_home_four">
            <div class="row">
                <div class="col-xl-2 col-lg-12">
                    <div class="header_logo">
                        <figure>
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/logo-2.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="header_logo_mobile">
                        <figure>
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/logo.png') }}" alt=""></a>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-12">
                    <div class="header_top_home_four">
                        <div class="header_left_area">
                            <div class="header_info_box">
                                <ul>
                                    <li><a href="#"><i class="flaticon-pin-1"></i>Dudley Senanayake College. Park Road, Colombo 05 - 00500 </a></li>
                                    <li><a href="tel:+94112589558"><i class="fa fa-phone"></i>+94 11 258 9558</a></li>
                                    <li><a href="mailto:info@dudleysenanayakecollege.lk"><i class="flaticon-email-1"></i>info@dudleysenanayakecollege.lk</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header_right_area">
                            <div class="social_links_style_one">
                                <ul>
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="log_in_button">
                                <a href="{{ route('login') }}" class="button-style-four"><i class="flaticon-user-1"></i> Login</a>
                            </div>
                        </div>
                    </div>

                    <!-- Header Middle -->
                    <div class="header_middle_style_four">
                        <div class="header_lower_right menu_area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="dropdown"><a href="{{ url('/about') }}">About</a>
                                            <ul>
                                                <li><a href="{{ url('/about') }}">About School</a></li>
                                                <li><a href="{{ url('/about/history') }}">School History</a></li>
                                                {{--<li class="dropdown"><a href="{{ url('/history') }}">School History</a>
                                                    <ul>
                                                        <li><a href="{{ url('/history') }}">School History</a></li>
                                                        <li><a href="{{ url('/history-principles') }}">Past Principles</a></li>
                                                    </ul>
                                                </li>--}}
                                                <li><a href="{{ url('/about/sports') }}">Sports</a></li>
                                                <li><a href="{{ url('/about/teachers') }}">Teachers</a></li>
                                                <li><a href="{{ url('/about/prefects') }}">Prefects</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('/academics') }}">Academics</a>
                                            <ul>
                                                <li><a href="{{ url('/academics') }}">Academics</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('/sports') }}">Sports</a>
                                            <ul>
                                                <li><a href="{{ url('/sports') }}">All Sports</a></li>
                                                <li><a href="{{ url('/sports/rugby') }}">Rugby</a></li>
                                                <li><a href="{{ url('/sports/cricket') }}">Cricket</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/events') }}">Events</a></li>
                                        <li><a href="{{ url('/news') }}">News</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="search_box">
                            <form method="search" action="{{ url('/') }}">
                                <input type="search" name="search-input" value="" placeholder="Search ..." required >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Outer Box Home Four -->

    <!-- Sticky Header-->
    <div class="sticky_header">
        <div class="container">
            <div class="header-outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">X</div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/common/images/footer-logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li><a href="javascript:void(0);"><i class="flaticon-pin-1 me-2"></i>Dudley Senanayake College<br><span class="ms-4">Park Road</span><br><span class="ms-4">Colombo 05</span><br><span class="ms-4">00500</span></a></li>
                    <li><a href="mailto:info@dudleysenanayakecollege.lk"><i class="flaticon-email-1 me-2"></i> info@dudleysenanayakecollege.lk</a></li>
                    <li><a href="tel:+94112589558"><i class="fa fa-phone me-2"></i>+94 11 258 9558</a></li>
                </ul>
            </div>
            <ul class="social-links centred">
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
