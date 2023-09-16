<header x-data="{ open: false, atTop: true }">
    <nav class="fixed inset-x-0 z-50 transition-colors duration-300 ease-in backdrop-blur"
         :class="{ 'bg-zinc-50/50 shadow': !atTop | open }"
         @scroll.window="atTop = window.scrollY <= 100"
         @load.window="atTop = window.scrollY <= 100">
        <div class="container mx-auto px-4 lg:px-16 py-2">
            <div class="relative flex items-center justify-between">
                <div class="flex flex-1 items-center justify-between">
                    <a href="{{ route('home') }}" class="flex flex-shrink-0 items-center">
                        <img class="block h-12 w-auto transition-all duration-300" :class="{'!h-10': !atTop | open}"
                             src="{{ asset('img/logo-black.png') }}" alt="Foris Labs">
                    </a>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <x-nav-link route="home">Home</x-nav-link>
                            <x-nav-link route="contact-us">Contact Us</x-nav-link>

                            <a href="{{ route('login') }}"
                               class="bg-orange-500 text-white text-base font-bold rounded-full py-2 px-6 hover:bg-orange-400">
                                Login
                            </a>
                        </div>
                    </div>
                    <div x-cloak class="flex items-center sm:hidden">
                        <button type="button" @click="open = !open"
                                class="text-ash-800 inline-flex items-center justify-center rounded-md p-2 hover:text-black focus:outline-none focus:ring-1 focus:ring-orange-500"
                                aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" :class="{ 'hidden': open, 'block': !open }"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" :class="{ 'block': open, 'hidden': !open }"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-cloak class="sm:hidden" x-show="open"
             x-transition:enter="transition ease-out duration-500"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-400"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95" id="mobile-menu" @click.away="open = false">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <x-nav-link route="home" class="block">Home</x-nav-link>
                <x-nav-link route="contact-us" class="block">Contact Us</x-nav-link>
            </div>
            <div class="mb-4 flex justify-center">
                <a href="{{ route('login') }}"
                   class="inline rounded-md bg-orange-500 px-8 py-2 text-base font-medium text-white">Login</a>
            </div>

        </div>


    </nav>
    <div x-cloak class="fixed bottom-4 right-4 z-40 transition-opacity duration-500 md:bottom-8"
         :class="{ 'opacity-0': atTop, 'opacity-100': !atTop }">
        <button @click="window.scrollTo(0,0)" :disabled="atTop"
                class="bg-gray-800 flex h-14 w-14 items-center justify-center rounded-full text-lg text-white hover:bg-orange-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
</header>
