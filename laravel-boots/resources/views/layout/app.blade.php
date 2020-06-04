<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a36d2c8f1b.js" crossorigin="anonymous"></script>
        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <body>
        <nav class="navbar sticky-top navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" width="64" height="64" alt="" loading="lazy"> Agencia Digital de Costa Rica
            </a>
        </nav>
        @yield('content')
          <script src="{{ asset('js/app.js') }}"></script>
          <script type="module" src="{{ asset('js/main.js') }}"></script>
          @yield('script')
    </body>
</html>
