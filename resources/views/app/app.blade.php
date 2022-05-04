<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
    @include('app.nav')
    <div class="container">
        @yield('content')
    </div>
 
    @include('app.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>