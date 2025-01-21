<header class="td_site_header td_style_1 td_type_2 td_sticky_header td_medium td_heading_color">
    <div class="td_top_header td_heading_bg td_white_color">
        <div class="container">
            <div class="td_top_header_in">
                <div class="td_top_header_left">
                    <ul class="td_header_contact_list td_mp_0 td_normal">
                        <li>
                            <img src="{{ asset('frontend/assets/img/icons/call.svg') }}" alt="">
                            <span>
                                Call: <a href="tel:99066789768">990 66789 768</a>
                            </span>
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/img/icons/envlop.svg') }}" alt="">
                            <span>
                                Email: <a href="mailto:support@educat.com">support@educat.com</a>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="td_top_header_right">
                    <div class="td_hero_icon_btns position-relative">
                        <div class="position-relative">
                            <button class="td_circle_btn td_center td_search_tobble_btn" type="button">
                                <img src="{{ asset('frontend/assets/img/icons/search_2.svg') }}" alt="">
                            </button>
                            <div class="td_header_search_wrap">
                                <form action="#" class="td_header_search">
                                    <input type="text" class="td_header_search_input"
                                        placeholder="Search For Anything">
                                    <button class="td_header_search_btn td_center">
                                        <img src="{{ asset('frontend/assets/img/icons/search_2.svg') }}" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                        <button class="td_circle_btn td_center" type="button">
                            <img src="{{ asset('frontend/assets/img/icons/love.svg') }}" alt="">
                            <span class="td_circle_btn_label">0</span>
                        </button>
                        <button class="td_circle_btn td_center" type="button">
                            <img src="{{ asset('frontend/assets/img/icons/cart.svg') }}" alt="">
                            <span class="td_circle_btn_label">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="td_main_header">
        <div class="container">
            <div class="td_main_header_in">
                <div class="td_main_header_left">
                    <a class="td_site_branding" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/assets/img/logo_v2.svg') }}" alt="Logo">
                    </a>
                </div>
                <div class="td_main_header_center">
                    <nav class="td_nav">
                        <div class="td_nav_list_wrap">
                            <div class="td_nav_list_wrap_in">
                                <ul class="td_nav_list">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Courses</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="td_mega_menu">
                                        <a href="#">Pages</a>
                                    </li>
                                    <li>
                                        <a href="#">Blogs</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="td_main_header_right">
                    <div class="td_header_btns">
                        @if (Auth::guard('admin')->check())
                            <a href="{{ route('admin.dashboard') }}"
                                class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Dashboard</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        @elseif (Auth::guard('instructor')->check())
                            <a href="{{ route('instructor.dashboard') }}"
                                class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Dashboard</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        @elseif (Auth::guard('web')->check())
                            <a href="{{ route('student.dashboard') }}"
                                class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Dashboard</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="td_btn td_style_1 td_type_1 td_radius_30 td_medium td_with_shadow">
                                <span class="td_btn_in td_accent_color td_white_bg">
                                    <span>Sign in</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                            <a href="{{ route('register') }}"
                                class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>Sign up</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
