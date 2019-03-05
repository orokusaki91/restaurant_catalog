<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css?ver=' . time()) }}">
</head>

<body>
    <div id="app">
        <app></app>
    </div>
    {{-- <script src="{{ asset('js/jquery-ui.js') }}"></script> --}}
    <script src="{{ asset('js/app.js?ver=' . time()) }}"></script>

    {{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
    <script src="https://unpkg.com/vue-fullpage.js/dist/vue-fullpage.min.js"></script>
</body>

</html>