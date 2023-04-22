<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ @$setting->site_name }} | @yield('title')</title>
    <script>var APP_URL = {!! json_encode(url('/')) !!}</script>

    <link rel="icon" type="image/x-icon" href="{{ @$setting->favicon }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/font-icons/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('style')

    {{-- app.js --}}
    <script src="{{ asset('admin/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="sidebar-noneoverflow">
    <div id="app">

        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>

        @include('admin.includes.navbar')


        <div class="main-container" id="container">
            <div class="overlay"></div>
            <div class="search-overlay"></div>

            @include('admin.includes.sidebar')

            <div id="content" class="main-content">

                <div class="layout-px-spacing">
                    <div class="row layout-top-spacing layout-spacing">
                        @yield('content')
                    </div>
                </div>

                @include('admin.includes.footer')
            </div>
        </div>

    </div>

    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    @stack('script')

</body>
</html>
