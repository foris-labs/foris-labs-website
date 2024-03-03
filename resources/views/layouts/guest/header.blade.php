<header x-data="{ open: false, scrolled: false, atTop: true }">
    <div x-data="{ scrolled: false }"
         @scroll.window="scrolled = window.scrollY >150"
         class="fixed top-0 w-full text-white p-4 z-50 transition duration-300 ease-in-out"
         :class="{ 'bg-gradient-to-r from-primary to-primary-light': scrolled }">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex flex-shrink-0 items-center">
                    <img src="{{ asset('img/logo-white.png') }}" alt="Logo"
                         class="block h-12 w-auto transition-all duration-300" :class="{'!h-10': !atTop | open}">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex justify-center space-x-4 font-burbank">
                <!-- Home link inside a white parallelogram box -->
                <a href="{{ route('home') }}"
                   class="hover:underline bg-white hover:bg-gray focus:outline-none px-2">
                    <span class="parallelogram-box uppercase font-bold text-2xl"
                          style="transform: skewY(2deg); color:#16A4E1;">Home</span>
                </a>

                <a href="#" class="hover:underline uppercase font-bold text-2xl">Who We Are</a>
                <a href="{{ route('contact-us') }}" class="hover:underline uppercase font-bold text-2xl">Contact Us</a>
            </div>

            <!-- Login Button inside a red rectangle box -->
            <button class="hidden sm:block w-20 h-8 bg-ff4343 text-white uppercase font-bold hover:bg-ff9999 focus:outline-none
            font-burbank text-xl">
                Log In
            </button>

            <!-- Mobile Menu Icon -->
            <div class="sm:hidden">
                <button @click="open = !open"
                        class="text-ash-800 inline-flex items-center justify-center rounded-md p-2 hover:text-black focus:outline-none focus:ring-1 focus:ring-blue-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation Links (Hidden by default) -->
            <div x-show="open"
                 class="fixed top-0 left-0 right-0 mt-16 p-4 rounded-md shadow-md space-y-4 bg-16A4E1 font-burbank"
                 @click.away="open = false"
                 x-transition:enter="transition-opacity ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                <div class="flex justify-between items-center">
                    <div class="flex flex-col items-start space-y-2">
                        <a href="{{ route('home') }}"
                           class="hover:underline bg-white hover:bg-gray focus:outline-none px-2">
                        <span class="parallelogram-box uppercase font-bold text-xl"
                              style="transform: skewY(2deg); color:#16A4E1;">Home</span>
                            <a href="#" class="hover:underline text-white">Who We Are</a>
                            <a href="{{ route('contact-us') }}" class="hover:underline text-white">Contact Us</a>
                    </div>
                    <!-- Login Button inside a red rectangle box -->
                    <button
                        class="w-16 bg-ff4343 text-white uppercase font-bold hover:bg-ff9999 focus:outline-none font-burbank">
                        Log In
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
