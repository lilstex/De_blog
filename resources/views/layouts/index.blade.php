<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>De-Blog</title>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        @include('includes.messages')
        @yield('content')
    </div>
</body>
</html>