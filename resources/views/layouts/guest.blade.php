<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <meta name="description" content="Foris Labs is a virtual 3d Laboratory designed to eliminate the -probem if">
    <meta name="keywords" content="foris labs laboratory 3d virtual offline">

    <!-- Website Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&family=Shantell+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/cdc8c3de1e6bd5a9a67c6a001f9fedd0?family=Burbank+Big+Condensed+Black" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/dilo-world" rel="stylesheet">
     

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer data-domain="forislabs.com" src="https://analytics.codewithkyrian.com/js/script.js"></script>

</head>

<body x-data>
@include('layouts.guest.header')
<div class="text-ash-900 font-sans antialiased">
    {{ $slot }}

    @include('layouts.guest.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
</body>

</html>
