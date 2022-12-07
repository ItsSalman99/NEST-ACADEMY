<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('backend.partials.head')

<body class="layout-default">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>
                @include('backend.partials.header')
                @yield('content')
            </div>
        </div>
        @include('backend.partials.sidebar')

    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/backend/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/backend/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/backend/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('assets/backend/vendor/dom-factory.js') }}"></script>

    <!-- MDK -->
    <script src="{{ asset('assets/backend/vendor/material-design-kit.js') }}"></script>

    <!-- Range Slider -->
    <script src="{{ asset('assets/backend/vendor/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/ion-rangeslider.js') }}"></script>

    <!-- App -->
    <script src="{{ asset('assets/backend/js/toggle-check-all.js') }}"></script>
    <script src="{{ asset('assets/backend/js/check-selected-row.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sidebar-mini.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('assets/backend/js/app-settings.js') }}"></script>


    <!-- Flatpickr -->
    <script src="{{ asset('assets/backend/vendor/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/flatpickr.js') }}"></script>

    <!-- Global Settings -->
    <script src="{{ asset('assets/backend/js/settings.js') }}"></script>

    <!-- Moment.js -->
    <script src="{{ asset('assets/backend/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/moment-range.js') }}"></script>


    <!-- Chart.js -->
    <script src="{{ asset('assets/backend/vendor/Chart.min.js') }}"></script>

    <!-- App Charts JS -->
    <script src="{{ asset('assets/backend/js/chartjs-rounded-bar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/charts.js') }}"></script>

    <!-- Chart Samples -->
    <script src="{{ asset('assets/backend/js/page.analytics.js') }}"></script>

    @include('sweetalert::alert')

</body>

</html>
