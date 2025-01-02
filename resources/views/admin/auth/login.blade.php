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
                <h1 class="td_white_color td_fs_48 td_mb_10">Admin Login</h1>
                {{-- <ol class="breadcrumb m-0 td_fs_20 td_opacity_8 td_semibold td_white_color">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Signin</li>
                </ol> --}}
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
    <!-- Start Signin Section -->
    <section>
        <div class="td_height_120 td_height_lg_80"></div>
        <div class="container">
            <div class="row td_gap_y_40">
                <div class="col-lg-6">
                    <div class="td_form_card td_style_1 td_radius_10 td_gray_bg_5">
                        <div class="td_form_card_in">
                            <h2 class="td_fs_36 td_mb_20">Admin Login</h2>
                            <hr>

                            <div class="td_height_30 td_height_lg_30"></div>
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf

                                <input type="text" class="td_form_field td_mb_30 td_medium td_white_bg"
                                    name="email" type="email" id="email" placeholder="Email *">
                                <x-input-error :messages="$errors->get('email')" class="mt-2 error-message" />
                                <input type="password" class="td_form_field td_mb_10 td_medium td_white_bg"
                                    id="password" type="password" name="password" placeholder="Password *">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 error-message" />
                                <div class="td_form_card_text_2 td_mb_50">
                                    <div><a href="{{ route('admin.password.request') }}"
                                            class="td_semibold td_accent_color">Forgot Password?</a>
                                    </div>
                                    <div class="td_accent_color">
                                        <div class="td_custom_checkbox">
                                            <input type="checkbox" id="remember_me" name="remember">
                                            <label for="remember_me">Remember me</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="td_form_card_bottom td_mb_25">
                                    <button type="submit" class="td_btn td_style_1 td_radius_10 td_medium">
                                        <span class="td_btn_in td_white_color td_accent_bg">
                                            <span>Sign In</span>
                                        </span>
                                    </button>
                                </div>
                                <p class="td_form_card_text td_fs_20 td_medium td_heading_color mb-0">Don’t Have an
                                    Account? <a href="{{ route('admin.register') }}">Sign up</a></p>
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
    <!-- End Signin Section -->
    <!-- Start Footer Section -->
    @include('frontend.include.footer')
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
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
