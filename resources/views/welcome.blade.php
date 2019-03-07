<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#ff0000" />
    <meta name="msapplication-navbutton-color" content="#ff0000" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff0000" />

    <title>
        Restaurant
    </title>

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css?ver=' . time()) }}">
</head>

<body v-scroll-spy>
    <div id="app">
        <app-components></app-components>
    </div>
    {{-- <script src="{{ asset('js/jquery-ui.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js?ver=' . time()) }}"></script>

    {{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
    <script src="https://unpkg.com/vue-fullpage.js/dist/vue-fullpage.min.js"></script>
    <script src="//unpkg.com/vue2-scrollspy/dist/index.js"></script>
</body>

</html>