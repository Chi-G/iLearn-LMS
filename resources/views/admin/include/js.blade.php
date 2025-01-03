<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('backend/assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/flowbite.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/dashboard-student.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/component/app-menu-bar.js') }}"></script>
<script src="{{ asset('backend/assets/js/switcher.js') }}"></script>
<script src="{{ asset('backend/assets/js/layout.js') }}"></script>
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if (session('error'))
    toastr.error("{{ session('error') }}");
    @endif
</script>
