<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="img/fav.png">
    <title>Aahar - Online Food Ordering Platform</title>

    <link href="{{ asset('assets/frontend/vendor/slick/slick/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/vendor/slick/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/frontend/vendor/icons/feather.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/aahar.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/vendor/sidebar/demo.css') }}" rel="stylesheet">
</head>

<body class="fixed-bottom-bar">
    <!-- header -->
    <livewire:frontend.theme.header />
    <!-- header -->

    <!-- mobile-menu -->
    <livewire:frontend.theme.mobile-menu />
    <!-- mobile-menu -->


    <!-- content -->
    @yield('content')
    <!-- content -->


    <!-- mobile-footer-menu -->
    <livewire:frontend.theme.mobile-footer-menu />
    <!-- mobile-footer-menu -->

    <!-- footer -->
    <livewire:frontend.theme.footer />
    <!-- footer -->

    <!-- sidebar -->
    <livewire:frontend.theme.sidebar />
    <!-- sidebar -->

    <!-- filter-modal -->
    <livewire:frontend.theme.filter-modal />
    <!-- filter-modal -->




    <script data-navigate-once src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendor/jquery/jquery-ui.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script data-navigate-once src="{{ asset('assets/frontend/vendor/slick/slick/slick.min.js') }}"></script>

    <script data-navigate-once src="{{ asset('assets/frontend/vendor/sidebar/hc-offcanvas-nav.js') }}"></script>

    <script data-navigate-once src="{{ asset('assets/frontend/js/aahar.js') }}"></script>


</body>


</html>