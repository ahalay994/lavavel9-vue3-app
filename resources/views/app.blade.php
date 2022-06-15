<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/index.css') }}" rel="stylesheet">
        @stack('css')
    </head>
    <body id="app" class="antialiased">
        <x-header></x-header>
        @yield('content')
        <x-footer></x-footer>

        <script src="{{ mix('js/app.js') }}"></script>
        @stack('js')
    </body>
</html>
