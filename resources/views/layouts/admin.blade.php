<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <!-- CSS Files -->
    <link href="{{ asset('admin/css/soft-ui-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
</head>
<body class="g-sidenav-show  bg-gray-100">
@include('layouts.inc.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.navebar')


    <div class="container-fluid py-4">
        @yield('content')
    </div>
    @include('layouts.inc.footer')
</main>
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!--   Core JS Files   -->

<script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
<script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer></script>
<script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" defer></script>
<script src="{{ asset('admin/js/soft-ui-dashboard.min.js?v=1.0.6') }}" defer></script>

@yield('scripts')
</body>
</html>
