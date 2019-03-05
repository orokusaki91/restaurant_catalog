<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/fullpage.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css?ver=' . time()) }}">
</head>

<body>
    <div id="app">
        <header-component></header-component>
        <div id="fullpage">
            <div class="section">
                Ivan
            </div>
            <div class="section">
                a
            </div>
            <div class="section">
            </div>
            <div class="section">
            </div>
            <div class="section">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/scrolloverflow.min.js') }}"></script>
    <script src="{{ asset('js/fullpage.min.js') }}"></script>
    <script src="{{ asset('js/fullpage.extensions.min.js') }}"></script>
    <script src="{{ asset('js/app.js?ver=' . time()) }}"></script>
    <script>
        new fullpage('#fullpage', {
            //options here
            // licenseKey: 'xxxxxxxx-xxxxxxxx-xxxxxxxx-xxxxxxxx',
            autoScrolling: true,
            scrollHorizontally: true,
            scrollingSpeed: 1000,
            // scrollBar: true,
            scrollOverflow: true,
            css3: true
        });

        //methods
        fullpage_api.setAllowScrolling(false);
    </script>
</body>

</html>