<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @livewireStyles --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Import font locally --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    {{-- It advised in the doc of flowbite to add the link at the end of the body --}}
    {{-- https://flowbite.com/docs/getting-started/laravel/#flowbite-components --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    @include('app.nav')
    @yield('content')
    {{-- @include('component.footer') --}}

    {{-- @livewireScripts --}}
    {{-- Le lien local ne fonctionne pas --}}
    {{-- <script src="Sparcoon/node_modules/flowbite/dist/flowbite.js"></script> --}}
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
</body>

</html>
