<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags -->
    @yield('metatags')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,900;1,100;1,200;1,300;1,400;1,500;1,800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="{{ asset('static/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('static/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/28203db290.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://kit.fontawesome.com/32992c3dcc.js" crossorigin="anonymous"></script> -->
    <!-- <script src="{{ asset('static/js/jquery.js') }}" defer></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('static/slick/slick.min.js') }}" defer></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('static/js/bootstrap.min.bundle.js') }}" defer></script>
    <script src="{{ asset('static/js/app.js') }}" defer></script>
</head>
<body>
    <header> @yield('header') </header>
    <header> @yield('main') </header>
    <header> @yield('footer') </header>
</body>
</html>
