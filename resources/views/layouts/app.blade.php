<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Система «Управдом»') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
    window.Laravel = {!! json_encode([
       'csrfToken' => csrf_token(),
       'apiToken' => Auth::user()->api_token ?? null,
    ]) !!};
    </script>
    <script src="https://unpkg.com/imask"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <script>
        var element = document.getElementById('phone');
        var maskOptions = {
            mask: '+{7}(000)-000-00-00'
        };
        var mask = IMask(element, maskOptions);
    </script>
</body>
</html>
