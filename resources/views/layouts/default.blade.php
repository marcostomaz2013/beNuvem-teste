<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @yield('pagespecificscripts')
</body>
</html>
