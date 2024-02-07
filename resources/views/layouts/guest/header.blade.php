
    <header x-data="{ open: false, atTop: true }">
        <div x-data="{ scrolled: false }"
            @scroll.window="scrolled = window.scrollY > 0"
            class="fixed top-0 w-full bg-blue-500 text-white p-4 z-50 transition duration-300 ease-in-out"style="background-color: #16A4E1;"
            :class="{ 'bg-blue-800': scrolled }" style="background-color: #16A4E1;">
                <div class="container mx-auto flex justify-between items-center">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex flex-shrink-0 items-center">
                            <img src="{{ asset('img/redesign/logo1.png') }}" alt="Logo" class="block h-12 w-auto transition-all duration-300" :class="{'!h-10': !atTop | open}">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex justify-center space-x-4" style="font-family: 'Burbank Big Condensed Black';">
                        <!-- Home link inside a white parallelogram box -->
                        <a href="{{ route('home') }}" class="hover:underline bg-white hover:bg-gray focus:outline-none px-2">
                            <span class="parallelogram-box uppercase font-bold text-xl" style="transform: skewX(-20deg); color:#16A4E1;">Home</span>
                        </a>
        
                        <a href="#" class="hover:underline uppercase font-bold text-xl">Who We Are</a>
                        <a href="#" class="hover:underline uppercase font-bold text-xl">Contact Us</a>
                    </div>

                    <!-- Login Button inside a red rectangle box -->
                    <button class="w-20 h-8 bg-ff4343 text-white uppercase font-bold hover:bg-ff9999 focus:outline-none"style="font-family: 'Burbank Big Condensed Black';">
                        Log In
                    </button>
                
                </div>

            </div>
    
    </header>
