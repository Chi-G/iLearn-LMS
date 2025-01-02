<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    @include('frontend.include.css')

    <style>
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Start Preloader -->
    <div class="td_preloader">
        <div class="td_preloader_in">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Start Header Section -->
    @include('frontend.include.second_header')
    <!-- End Header Section -->
    <!-- Start Page Heading Section -->
    <section class="td_page_heading td_center td_bg_filed td_heading_bg text-center td_hobble"
        data-src="{{ asset('frontend/assets/img/others/page_heading_bg.jpg') }}">
        <div class="container">
            <div class="td_page_heading_in">
                <h1 class="td_white_color td_fs_48 td_mb_10">Admin Register</h1>
            </div>
        </div>
        <div class="td_page_heading_shape_1 position-absolute td_hover_layer_3"></div>
        <div class="td_page_heading_shape_2 position-absolute td_hover_layer_5"></div>
        <div class="td_page_heading_shape_3 position-absolute">
            <img src="{{ asset('frontend/assets/img/others/page_heading_shape_3.svg') }}" alt="">
        </div>
        <div class="td_page_heading_shape_4 position-absolute">
            <img src="{{ asset('frontend/assets/img/others/page_heading_shape_3.svg') }}" alt="">
        </div>
        <div class="td_page_heading_shape_5 position-absolute">
            <img src="{{ asset('frontend/assets/img/others/page_heading_shape_3.svg') }}" alt="">
        </div>
        <div class="td_page_heading_shape_6 position-absolute td_hover_layer_3"></div>
    </section>
    <!-- End Page Heading Section -->
    <!-- Start Signup Section -->
    <section>
        <div class="td_height_120 td_height_lg_80"></div>
        <div class="container">
            <div class="row td_gap_y_40">
                <div class="col-lg-6">
                    <div class="td_form_card td_style_1 td_radius_10 td_gray_bg_5">
                        <div class="td_form_card_in">
                            <h2 class="td_fs_36 td_mb_20">Admin Register</h2>
                            <hr>
                            <div class="td_height_30 td_height_lg_30"></div>

                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('admin.register') }}">
                                @csrf

                                <input type="text" class="td_form_field td_mb_30 td_medium td_white_bg"
                                    id="name" type="name" name="name" placeholder="Full Name *">
                                <x-input-error :messages="$errors->get('name')" class="mt-2 error-message" />

                                <input type="text" class="td_form_field td_mb_30 td_medium td_white_bg"
                                    id="phone" name="phone" placeholder="Phone *">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                                <input type="text" class="td_form_field td_mb_30 td_medium td_white_bg"
                                    id="email" name="email" type="email" placeholder="Email *">
                                <x-input-error :messages="$errors->get('email')" class="mt-2 error-message" />

                                <input type="password" class="td_form_field td_mb_30 td_medium td_white_bg"
                                    id="password" type="password" name="password" placeholder="Password *">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 error-message" />

                                <input type="password" class="td_form_field td_mb_30 td_medium td_white_bg"
                                    id="password_confirmation" type="password" name="password_confirmation"
                                    placeholder="Password Confirmation *">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 error-message" />

                                <div class="td_form_card_bottom td_mb_25">
                                    <button type="submit" class="td_btn td_style_1 td_radius_10 td_medium">
                                        <span class="td_btn_in td_white_color td_accent_bg">
                                            <span>Sign Up</span>
                                        </span>
                                    </button>
                                </div>
                                <p class="td_form_card_text td_fs_20 td_medium td_heading_color mb-0">Already Have an
                                    Account? <a href="{{ route('admin.login') }}">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="td_sign_thumb">
                        <img src="{{ asset('frontend/assets/img/others/login.jpg') }}" alt=""
                            class="w-100 td_radius_10">
                    </div>
                </div>
            </div>
        </div>
        <div class="td_height_120 td_height_lg_80"></div>
    </section>
    <!-- End Signup Section -->
    <!-- Start Footer Section -->
    <footer class="td_footer td_style_1">
        <div class="container">
            <div class="td_footer_row">
                <div class="td_footer_col">
                    <div class="td_footer_widget">
                        <div class="td_footer_text_widget td_fs_18">
                            <svg width="241" height="64" viewBox="0 0 241 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M77.6 50V15.92H99.2V23.216H85.232V29.312H96.32V36.608H85.232V42.704H99.2V50H77.6ZM113.297 50.528C110.193 50.528 107.553 49.296 105.377 46.832C103.233 44.368 102.161 41.424 102.161 38C102.161 34.576 103.233 31.632 105.377 29.168C107.553 26.704 110.193 25.472 113.297 25.472C116.049 25.472 118.225 26.448 119.825 28.4V14H127.073V50H119.825V47.6C118.225 49.552 116.049 50.528 113.297 50.528ZM110.945 42.272C111.969 43.392 113.297 43.952 114.929 43.952C116.561 43.952 117.873 43.392 118.865 42.272C119.889 41.152 120.401 39.728 120.401 38C120.401 36.272 119.889 34.848 118.865 33.728C117.873 32.608 116.561 32.048 114.929 32.048C113.297 32.048 111.969 32.608 110.945 33.728C109.953 34.848 109.457 36.272 109.457 38C109.457 39.728 109.953 41.152 110.945 42.272ZM141.823 50.528C138.911 50.528 136.671 49.552 135.103 47.6C133.535 45.648 132.751 43.008 132.751 39.68V26H139.999V38.432C139.999 42.112 141.231 43.952 143.695 43.952C146.703 43.952 148.207 41.856 148.207 37.664V26H155.455V50H148.207V47.552C146.831 49.536 144.703 50.528 141.823 50.528ZM172.582 50.528C168.966 50.528 165.958 49.328 163.558 46.928C161.158 44.496 159.958 41.52 159.958 38C159.958 34.48 161.158 31.52 163.558 29.12C165.958 26.688 168.966 25.472 172.582 25.472C175.878 25.472 178.598 26.384 180.742 28.208C182.886 30.032 184.294 32.416 184.966 35.36H177.478C176.422 33.12 174.79 32 172.582 32C171.014 32 169.734 32.544 168.742 33.632C167.75 34.688 167.254 36.144 167.254 38C167.254 39.856 167.75 41.328 168.742 42.416C169.734 43.472 171.014 44 172.582 44C174.79 44 176.422 42.88 177.478 40.64H184.966C184.294 43.584 182.886 45.968 180.742 47.792C178.598 49.616 175.878 50.528 172.582 50.528ZM196.027 50L185.514 26H193.531L199.339 40.592L205.195 26H213.259L202.747 50H196.027ZM226.631 50.528C222.919 50.528 219.863 49.344 217.463 46.976C215.095 44.608 213.911 41.6 213.911 37.952C213.911 34.368 215.111 31.392 217.511 29.024C219.943 26.656 222.983 25.472 226.631 25.472C228.391 25.472 230.039 25.776 231.575 26.384C233.143 26.992 234.519 27.872 235.703 29.024C236.919 30.176 237.863 31.664 238.535 33.488C239.207 35.312 239.511 37.376 239.447 39.68H220.967C221.095 40.992 221.671 42.096 222.695 42.992C223.719 43.856 225.159 44.288 227.015 44.288C228.071 44.288 229.031 44.08 229.895 43.664C230.759 43.216 231.335 42.672 231.623 42.032H239.207C238.439 44.56 236.903 46.608 234.599 48.176C232.295 49.744 229.639 50.528 226.631 50.528ZM226.439 31.232C225.063 31.232 223.911 31.584 222.983 32.288C222.087 32.992 221.479 33.92 221.159 35.072H231.431C231.079 33.76 230.423 32.8 229.463 32.192C228.535 31.552 227.527 31.232 226.439 31.232Z"
                                    fill="white" />
                                <circle cx="32" cy="32" r="32" fill="currentColor" />
                                <g clip-path="url(#clip0_34_2577)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.6467 30.6328C23.4232 32.1737 24.1977 33.7161 24.9399 35.2737L26.6086 38.7762C25.1372 38.8256 23.6642 38.8377 22.1948 38.9243C21.6339 38.9574 21.0762 39.0402 20.5225 39.1349C19.7311 39.2703 18.9108 39.4904 18.1533 39.8018C17.1649 40.2082 15.8001 41.1065 15.8288 42.3478C15.8525 43.5661 16.7204 44.4356 17.5569 45.214C18.295 45.9009 19.3666 46.3799 20.2767 46.829C22.1427 47.7497 24.0947 48.5327 26.0432 49.2601C27.3919 49.7637 28.7457 50.152 30.1545 50.4492C30.8123 50.588 31.8614 50.6214 32.196 49.8762C32.4385 49.3306 32.2448 48.723 32.0288 48.2041C31.7527 47.5411 31.4573 46.8842 31.1623 46.2293L29.9514 43.5409C31.8143 43.5741 33.6772 43.6321 35.5405 43.6403C37.0245 43.6473 38.492 43.5623 39.9611 43.3505C41.3406 43.1514 42.982 42.5701 43.7014 41.2806C44.5503 39.759 43.7156 37.8291 42.9012 36.4768C42.5267 35.8548 42.2005 35.2005 41.7772 34.6105L38.9251 30.6352C39.4314 29.9172 39.9592 29.2136 40.4444 28.4806C41.1643 27.3931 41.8721 26.2964 42.5393 25.1753C43.0034 24.3951 43.4349 23.5944 43.8364 22.7802C44.6028 21.227 45.9017 18.6739 44.3166 17.1807C43.3493 16.2696 41.8301 16.2005 40.5805 16.3771C39.2698 16.5623 37.9618 16.7719 36.6596 17.0101C33.2584 17.6323 29.8459 18.7565 26.5277 19.7733C25.3415 20.1369 24.1843 20.59 23.0204 21.0186C22.2364 21.3073 21.4657 21.7203 20.7201 22.1218C20.2743 22.3617 19.8305 22.7021 19.5624 23.1386C19.4029 23.3981 19.4537 23.7786 19.5075 24.0627C19.6125 24.6169 19.8473 25.1374 20.0804 25.6471L22.6467 30.6328ZM34.1923 21.8787C35.4104 21.6447 36.6291 21.4134 37.851 21.2003C38.2375 21.1329 39.2023 20.9037 39.4235 21.3667C39.7333 22.0164 38.8852 23.1216 38.588 23.6636C38.3336 24.1274 38.0638 24.5828 37.8003 25.0412L36.3977 27.4828L34.259 25.0955L32.1535 23.0235L31.6079 22.5726L31.4239 22.4352C32.3466 22.2497 33.2679 22.0563 34.1923 21.8787ZM30.3678 23.9286C30.3923 23.9266 30.416 23.9498 30.431 23.9678L30.502 24.0564C30.6367 24.2571 30.7593 24.4628 30.8862 24.6683C31.4529 25.587 32.0193 26.5064 32.5866 27.4247C32.9624 28.033 33.3402 28.6404 33.716 29.249L34.4583 30.452L34.5228 30.5609C33.9876 31.4412 33.4659 32.3297 32.9171 33.2016C32.4888 33.8825 32.0392 34.5504 31.5919 35.2191C31.3991 35.5063 31.0907 35.909 30.6959 35.8606C29.9319 35.7668 29.6828 34.5705 29.5983 33.9609C29.553 33.6343 29.5124 33.3065 29.4891 32.9776C29.4469 32.3837 29.3874 31.7885 29.4018 31.1931C29.4217 30.373 29.4267 29.5525 29.4613 28.7329C29.482 28.2432 29.4955 27.7511 29.5676 27.2662C29.6667 26.597 29.7658 25.9277 29.865 25.2585C29.9072 24.9737 29.9975 24.6963 30.0825 24.4217C30.1274 24.303 30.1759 24.1885 30.2311 24.0743C30.2311 24.0743 30.303 23.9342 30.3678 23.9286ZM29.2522 44.7164C29.6387 45.656 30.0424 46.6163 30.3025 47.6104C30.336 47.738 30.36 47.8683 30.3772 47.999C30.3914 48.1061 30.3932 48.2148 30.3966 48.3227C30.3981 48.3523 30.3552 48.3819 30.3293 48.3854C30.2757 48.3927 30.2218 48.3621 30.1777 48.3352C29.0438 47.6565 27.9137 46.9704 26.7775 46.2957L22.3376 43.6601L22.2007 43.575L22.3069 43.5529L22.7368 43.5057C23.5683 43.4846 24.3994 43.4267 25.2309 43.4419L28.7526 43.506C28.9192 43.9094 29.0861 44.3126 29.2522 44.7164ZM38.3328 38.7185C38.155 38.8744 37.8726 38.9159 37.6461 38.9449C37.3576 38.9816 37.0676 39.0237 36.7769 39.0244C35.7736 39.0266 34.7701 39.0455 33.767 39.0308C33.076 39.0208 32.3855 38.9803 31.6952 38.9503L27.679 38.7765C27.446 38.2763 27.2132 37.7756 26.9796 37.2758L23.9918 30.8852C23.3381 29.4126 22.6689 27.9466 22.0305 26.4673C21.9103 26.1884 21.817 25.8985 21.7166 25.612C21.6161 25.325 21.4774 24.9322 21.6278 24.6365C21.7596 24.3816 22.0707 24.2704 22.3278 24.1902C22.4603 24.1489 22.5959 24.1162 22.7325 24.0906C23.8484 23.8808 24.9674 23.6881 26.0844 23.4837L29.097 22.9322L28.9769 23.2791L28.8321 23.9369L28.8247 23.9784C28.7219 25.1082 28.5788 26.2347 28.5158 27.3673C28.4436 28.6689 28.4308 29.9736 28.4194 31.2771C28.4141 31.8879 28.4278 32.4996 28.4655 33.1091C28.4987 33.6399 28.5449 34.172 28.6321 34.6968C28.7086 35.1584 28.8262 35.6134 28.9558 36.0632C29.1479 36.7303 29.508 37.3886 30.0841 37.7974C30.2823 37.9381 30.5074 38.042 30.7448 38.0951C31.4956 38.2637 32.2895 37.8845 32.8773 37.4467C33.5009 36.9823 34.1725 36.4527 34.6953 35.854L36.4612 33.831C36.8088 34.4374 37.184 35.0291 37.5042 35.6504C37.8173 36.2572 38.0804 36.8887 38.3591 37.5122C38.501 37.8298 38.6388 38.347 38.3934 38.655C38.3753 38.678 38.3549 38.6991 38.3328 38.7185Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_34_2577">
                                        <rect width="38.4" height="38.4" fill="white"
                                            transform="translate(27.25 5.11719) rotate(35.1898)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>Far far away, behind the word mountains, far from the Consonantia, there live the blind
                                texts.</p>
                        </div>
                        <ul class="td_footer_address_widget td_medium td_mp_0">
                            <li><i class="fa-solid fa-phone-volume"></i><a href="cal:+23(000)68603">+23 (000) 68
                                    603</a></li>
                            <li><i class="fa-solid fa-location-dot"></i>66 broklyn golden street <br>600 New york. USA
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="td_footer_col">
                    <div class="td_footer_widget">
                        <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">Navigate</h2>
                        <ul class="td_footer_widget_menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">Refund</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="td_footer_col">
                    <div class="td_footer_widget">
                        <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">Courses</h2>
                        <ul class="td_footer_widget_menu">
                            <li><a href="course-details.html">Business Coach</a></li>
                            <li><a href="course-details.html">Development Coach</a></li>
                            <li><a href="course-details.html">Testimonials</a></li>
                            <li><a href="course-details.html">Seo Optimization</a></li>
                            <li><a href="course-details.html">Web design</a></li>
                            <li><a href="course-details.html">Life Coach</a></li>
                        </ul>
                    </div>
                </div>
                <div class="td_footer_col">
                    <div class="td_footer_widget">
                        <h2 class="td_footer_widget_title td_fs_32 td_white_color td_medium td_mb_30">Subscribe Now
                        </h2>
                        <div class="td_newsletter td_style_1">
                            <p class="td_mb_20 td_opacity_7">Far far away, behind the word mountains, far from the
                                Consonantia.</p>
                            <form action="#" class="td_newsletter_form">
                                <input type="email" class="td_newsletter_input" placeholder="Email address">
                                <button type="submit" class="td_btn td_style_1 td_radius_30 td_medium">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                        <span>Subscribe</span>
                                    </span>
                                </button>
                            </form>
                        </div>
                        <div class="td_footer_social_btns td_fs_20">
                            <a href="#" class="td_center">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="td_center">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="#" class="td_center">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="td_center">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="td_footer_bottom td_fs_18">
            <div class="container">
                <div class="td_footer_bottom_in">
                    <p class="td_copyright mb-0">Copyright ©educve | All Right Reserved</p>
                    <ul class="td_footer_widget_menu">
                        <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->
    <!-- Start Scroll Up Button -->
    <div class="td_scrollup">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    <!-- End Scroll Up Button -->
    <!-- Script -->
    @include('frontend.include.js')
</body>

</html>


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
