<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>

    <!-- Preloader Start -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Preloader Ends -->

    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/loopcounter.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
