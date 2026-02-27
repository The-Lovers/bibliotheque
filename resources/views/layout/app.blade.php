<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-5.3.8/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/font-awesome-6.5.0/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/css/owl.carousel.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo/log-' . app()->getLocale() . '.jpg') }}" type="image/x-icon">
    @yield('css')
    <title>@yield('title', __('guest.home.title'))</title>
</head>
<body>
    <header id="header">
        @yield('header')
    </header>
    <section id="content">
        @yield('content')
    </section>
    <footer id="footer">
        @yield('footer')
    </footer>

    <script src="{{ asset('lib/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('lib/js/popper.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap-5.3.8/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/font-awesome-6.5.0/js/all.js') }}"></script>
    <script src="{{ asset('lib/js/owl.carousel.min.js') }}"></script>
    @yield('js')
</body>
</html>
