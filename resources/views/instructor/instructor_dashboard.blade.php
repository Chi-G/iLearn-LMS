<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<head>
    @include('instructor.include.css')
</head>

<body
    class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-4">

    <div id="loader" class="w-screen h-screen flex-center bg-white fixed inset-0 z-[9999]">
        <img src="{{ asset('backend/assets/images/loader.gif') }}" alt="loader">
    </div>
    <!-- Start Header -->
    @include('instructor.include.header')
    <!-- End Header -->

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Start App Menu -->
    <div id="app-drawer"
        class="app-menu flex flex-col bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max border-r-2 border-primary-400 xl:border-none xl:translate-x-0 rounded-r-15 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:group-data-[sidebar-size=lg]:bottom-4 xl:group-data-[theme-width=box]:left-auto dk-theme-card-square z-backdrop ac-transition"
        tabindex="-1">
        <div
            class="px-6 group-data-[sidebar-size=sm]:px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:justify-center">
            <a href="{{ url('/') }}" class="group-data-[sidebar-size=lg]:block hidden">
                <img src="{{ asset('backend/assets/images/logo/logo-text.svg') }}" alt="logo"
                    class="group-[.dark]:hidden">
                <img src="{{ asset('backend/assets/images/logo/logo-text-dark.svg') }}" alt="logo"
                    class="group-[.light]:hidden">
            </a>
            <a href="{{ url('/') }}" class="group-data-[sidebar-size=lg]:hidden block">
                <img src="{{ asset('backend/assets/images/logo/logo-icon.svg') }}" alt="logo">
            </a>
        </div>
        @include('instructor.include.sidebar')
        <!-- Logout Link -->
        @include('instructor.include.logout')
    </div>
    <!-- End App Menu -->

    <!-- Start App Settings Sidebar -->
    @include('instructor.include.settings')
    <!-- End App Settings Sidebar -->

    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Bread Crumb Section -->
            @include('instructor.include.breadCrumb')
            <!-- End Bread Crumb Section -->

            <!-- Start Student Profile Preview Section -->
            @include('instructor.include.profile')
            <!-- End Student Profile Preview Section -->

            <!-- Start Student Course Overview Section -->
            @include('instructor.include.courseOverview')
            <!-- End Student Course Overview Section -->

            <!-- Start Student Course List Table -->
            @include('instructor.include.courseList')
            <!-- End Student Course List Table -->

            <!-- Start Recent Viewed Course -->
            @include('instructor.include.recentCourse')
            <!-- End Recent Viewed Course -->
        </div>
    </div>
    <!-- End Main Content -->

    @include('instructor.include.js')
</body>

<footer>
    <div class="td_footer_bottom td_fs_18 text-center">
        <div class="container">
            <div class="td_footer_bottom_in">
                <p class="td_copyright mb-0">Copyright © {{ date('Y') }} All Rights Reserved By iLearn</p>
            </div>
        </div>
    </div>
</footer>

</html>



{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
