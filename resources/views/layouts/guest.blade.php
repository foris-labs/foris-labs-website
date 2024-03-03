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
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&family=Shantell+Sans:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.cdnfonts.com/css/dilo-world" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{--    <script defer data-domain="forislabs.com" src="https://analytics.codewithkyrian.com/js/script.js"></script>--}}
    <style>

        /*@media (min-width: 1000px) and (max-width: 1280px) {*/
        /*    !* Your CSS rules for the specified range *!*/
        /*    .slant {*/
        /*        top: 0;*/
        /*        height: 400px;*/
        /*    }*/

        /*    .slant {*/
        /*        height: 500px;*/

        /*    }*/
        /*}*/
    </style>
</head>

<body x-data>
@include('layouts.guest.header')
<div class="text-ash-900 font-sans antialiased">
    {{ $slot }}

    @include('layouts.guest.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
    // Function to replace content based on screen size
    function replaceContent() {
        var ScreenSection = document.getElementById('experience');
        if (window.innerWidth <= 1200) {
            // Medium/small screen design
            ScreenSection.innerHTML = `
                <!-- Stretched Image with Black and White Filter -->
                <img src="{{ asset('img/redesign/team-smile.jpg') }}" alt="Stretched Image" class="w-full h-80 object-cover top-1/2">

                <!-- Overlay Image with Blue Border and Linear Gradient -->
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-black opacity-400">
                    <div class="absolute top-1/2 left-1/4 transform -translate-x-1/2 -translate-y-1/2 text-white text-left" style="margin-left: 80px">
                        <h2 class="text-3xl font-bold mb-4 font-burbank">Experience Foris Labs in Action Now!</h2>
                        <p class="text-base mb-4 font-arlon">Are you ready to revolutionize science education or take your institution's teaching to the next level?</p>
                        <p class="text-base mb-4 font-arlon">Witness firsthand how our virtual science laboratory can transform the way you learn and teach science.</p>
                        <!-- Button for Booking a Demo -->
                        <a href="#" class="inline-block mt-4 border border-white bg-transparent font-black font-burbank text-white text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none" >
                            Book a Demo
                            <span class="ml-2 font-bold">&#8594;</span> <!-- Right arrow character -->
                        </a>
                    </div>
                </div>
            `;
        } else {
            // Large screen design
            ScreenSection.innerHTML = `
                <img src="{{ asset('img/redesign/team-smile.jpg') }}" alt="Stretched Image" class="w-full h-80 object-cover grayscale top-1/2">

                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-black ">
                    <div class="relative">
                        <img src="{{ asset('img/redesign/team-smile.jpg') }}" alt="Overlay Image" class="w-full border-4 border-blue-500 shadow-lg object-cover" >
                        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-black  opacity-400"></div>

                        <div class="absolute top-1/2 left-1/4 inset-0 transform -translate-x-1/2 -translate-y-1/2 text-white text-left" style="margin-left: 80px">
                            <h2 class="text-3xl font-bold mb-4 font-burbank">Experience Foris Labs in Action Now!</h2>
                            <p class="text-base mb-4 font-arlon">Are you ready to revolutionize science education or take your institution's teaching to the next level?.</p>
                            <p class="text-base mb-4 font-arlon">Witness firsthand how our virtual science laboratory can transform the way you learn and teach science.</p>
                            <a href="#" class="inline-block mt-4 border border-white bg-transperent font-burbank text-white text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none font-black">
                                Book a Demo
                                <span class="ml-2 font-bold">&#8594;</span> <!-- Right arrow character -->
                            </a>
                        </div>
                    </div>
                </div>
            `;
        }
    }

    // Event listener for window resize
    window.addEventListener('resize', replaceContent);

    // Initial check on page load
    window.addEventListener('load', replaceContent);
</script>

</body>

</html>
