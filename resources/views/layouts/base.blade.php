<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    @stack('css')
</head>
<body>
@yield('header')

    <div class="container">
        @yield('content')

    </div>

@stack('scripts')
@yield('footer')
</body>
</html>