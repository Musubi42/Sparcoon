<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    {{-- It advised in the doc of flowbite to add the link at the end of the body --}}
    {{-- https://flowbite.com/docs/getting-started/laravel/#flowbite-components --}}
    <title>{{ config('app.name') }} | @yield('title')</title>
</head>

<body>
    @include('app.nav')
    <div class="container">
        @yield('content')
    </div>


    {{-- Le lien local ne fonctionne pas --}}
    {{-- <script src="Sparcoon/node_modules/flowbite/dist/flowbite.js"></script> --}}
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
