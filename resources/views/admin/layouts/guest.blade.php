<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="EBest Solutions Pvt. Ltd.">

    <title>{{ @$setting->site_name }} | @yield('title')</title>
    <script>var APP_URL = {!! json_encode(url('/')) !!}</script>

    <link rel="icon" type="image/x-icon" href="{{ @$setting->favicon }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/authentication/form.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/forms/switches.css') }}">
</head>
<body class="form">


    <div id="app">
        <div class="form-container outer">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        {{-- <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}" class="img-responsive" /> --}}
                        <div class="form-content">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- app.js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <!-- <script src="{{ asset('admin/js/libs/jquery-3.1.1.min.js') }}"></script> -->
    <!-- <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script> -->
    <!-- <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script> -->

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/js/authentication/form.js') }}"></script>

</body>
</html>
