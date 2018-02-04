<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/lightbox/css/lightbox.css" rel="stylesheet" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    @stack('css')
</head>
<body>
    @yield('header')

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@stack('scripts')
@yield('footer')
</body>
</html>