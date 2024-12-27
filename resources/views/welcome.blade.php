<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('frontend.include.css')
</head>

<body class="td_theme_2">
    <!-- Start Preloader -->
    <div class="td_preloader">
        <div class="td_preloader_in">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Start Header Section -->
    @include('frontend.include.header')
    <!-- End Header Section -->
    <!-- Start Hero Section -->
    @include('frontend.include.hero')
    <!-- End Hero Section -->
    <!-- Start Category Section -->
    @include('frontend.include.category')
    <!-- End Category Section -->
    <!-- Start Rate Section -->
    @include('frontend.include.rates')
    <!-- End Rate Section -->
    <!-- Start About Section -->
    @include('frontend.include.about')
    <!-- End About Section -->
    <!-- Start Courses Section -->
    @include('frontend.include.courses')
    <!-- End Courses Section -->
    <!-- Start Brands Section -->
    <div class="td_height_120 td_height_lg_80"></div>
    @include('frontend.include.brands')
    <!-- End Brands Section -->
    <!-- Start Testimonials Section -->
    @include('frontend.include.testimonial')
    <!-- End Testimonials Section -->
    <!-- Start Event Schedule Section -->
    @include('frontend.include.eventschedule')
    <!-- End Event Schedule Section -->
    <!-- Start Team Section -->
    @include('frontend.include.team')
    <!-- End Team Section -->
    <!-- Start Why Choose Us -->
    @include('frontend.include.whychoose')
    <!-- End Why Choose Us -->
    <!-- Start Blog Section -->
    @include('frontend.include.blog')
    <!-- End Blog Section -->
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
