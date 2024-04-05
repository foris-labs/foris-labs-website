<x-guest-layout title="3d Virtual Science Laboratory">

    <section class="h-screen relative font-burbank">
        <!-- Background Image with Overlay -->
        <video class="absolute inset-0 w-full min-h-[95vh] md:max-h-[95vh] object-cover object-center" autoplay muted loop poster="{{ asset('img/redesign/lab_image.png') }}">
            <source src="{{ asset('videos/demo_video1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        


        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-[8]"
             style="background-image: url('{{ asset('img/redesign/Rectangle 284.png') }}');max-height:95vh;"></div>

        <!-- Text Overlay on the image-->
        <div
            class="absolute top-1/2 ml-8 md:ml-10 lg:ml-20 left-1/8 transform -translate-y-1/2 text-white text-left font-burbank">
            <h1 class="text-6xl md:text-4xl lg:text-6xl font-bold mb-2 md:mb-4">
                Learn Science through Games
                <br/>
                <span class="bg-gradient-to-r from-primary to-primary-light text-transparent bg-clip-text text-5xl">Anywhere, Anytime!</span>

            </h1>
            <p class="text-lg md:text-xl font-arlon mt-8">Gamified contents to learn
                complex science topics and experiments</p>

            <!-- Button for Booking a Demo -->
            <a href="https://calendly.com/forislabs/product-demo"class="inline-block mt-8 border-73D5FF border-[3px] bg-16A4E1 text-white text-lg md:text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none uppercase font-burbank font-black">
                Book a Demo
                <i class='fas fa-arrow-right ml-2 text-[20px]'></i>
            </a>

         

        </div>
        <!-- Scroll-down Arrow Button -->
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2">
            <button class="bg-16A4E1 text-white rounded-full hover:bg-0499D9 focus:outline-none">
                    <i class='fas fa-arrow-down text-[15px] p-4'></i>
            </button>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="relative flex flex-col md:flex-row items-center justify-start bg-white h-80">

        <!-- Left Image -->
        <div class="absolute left-0 hidden md:block top-0">
            <img src="{{ asset('img/redesign/a_boy_with_book.png') }}" alt="Brand Image"
                 class="md:w-60 h-72 md:h-auto">
        </div>

        <!-- Right Content -->
        <div class="container max-w-5xl mx-auto px-4 md:px-7 md:mt-5">
            <!-- Wording -->
            <p class="font-bold mb-6 text-4xl md:text-5xl md:ml-20 text-16A4E1 font-burbank">
                Endorsed by Reputable Brands Worldwide
            </p>

            <!-- List of Brands -->
            <div class="brands-box flex flex-wrap justify-start w-full md:justify-center">
                <img src="{{ asset('img/brands/startup-south.png') }}" alt="startup-south"
                     class="sm:h-8 h-7 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/stanford.png') }}" alt="stanford"
                     class="sm:h-8 h-7 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/zenith-bank.svg') }}" alt="zenith-bank"
                     class="sm:h-8 h-8 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6  my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/injini.png') }}" alt="injini"
                     class="sm:h-8 h-8 px-2 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/techcrunch.svg') }}" alt="techcrunch"
                     class="sm:h-9 h-7 px-2 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4 filter grayscale opacity-60">
                <img src="{{ asset('img/brands/gesa-2023_white.webp') }}" alt="gesa"
                     class="sm:h-8 h-8 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4 filter grayscale opacity-60">
            </div>
        </div>

    </section>
    <!-- Slanted Div -->
    <div class="relative bg-gradient-to-r from-primary to-primary-light left-0 right-0 md:skew-y-2 h-[300px] md:h-[500px] z-10 md:mt-90">
        <div class="absolute w-full md:-skew-y-2 left-1/2 transform -translate-x-1/2  text-white text-center max-w-screen-md">
            <div class="flex flex-col items-center justify-center h-full p-6">
                <p class="text-base md:text-2xl text-center w-full font-arlon">Your Gateway to Interactive Science
                    Education! Immerse yourself in an engaging Virtual science Laboratory experience designed to
                    bring science to life. Join us on a captivating journey into the  world of science!</p>
            </div>
        </div>
    </div>


    <section class="relative flex flex-col md:flex-row lg:flex-row items-center space-y-8 z-10 pl-4 pr-4 md:pl-16 md:pr-16 lg:pl-40 lg:pr-40 -mt-40">
        <!-- Chemistry Section -->
        <div class="text-container text-center p-5">
            <img src="{{ asset('img/redesign/chemistry.png?s') }}" alt="Chemistry Image"
                 class="mx-auto w-80 h-[300px] md:w-100">
            <h2 class="text-2xl font-bold mt-4 text-center md:text-left md:ml-8 font-burbank text-[#4EAE4C]">Chemistry</h2>
            <p class="text-sm mt-2 text-center md:text-left md:ml-8 font-arlon">Unlock the world
                of molecules and reactions. Explore chemistry with interactive experiments.</p>
        </div>

        <!-- Physics Section -->
        <div class="text-container text-center p-5 ">
            <img src="{{ asset('img/redesign/physics.png?fs') }}" alt="Physics Image"
                 class="mx-auto w-80  h-[300px] md:w-100 md:-mt-[40px]">
            <h2 class="text-2xl font-bold mt-4 text-center md:text-left md:ml-8 font-burbank text-[#4EAE4C]">Physics</h2>
            <p class="text-sm mt-2 text-center md:text-left md:ml-8 font-arlon">Dive into the law
                of motion, energy and beyond. Experience Physics with captivating simulations.</p>
        </div>

        <!-- Biology Section -->
        <div class="text-container text-center p-5">
            <img src="{{ asset('img/redesign/biology2.png?sg') }}" alt="Biology Image"
                 class="mx-auto w-80  h-[300px] md:w-100 md:-mt-[40px]">
            <h2 class="text-2xl font-bold mt-4 text-center md:text-left md:ml-8 font-burbank text-[#4EAE4C]">Biology</h2>
            <p class="text-sm mt-2 text-center md:text-left md:ml-8 font-arlon">Discover the
                wonders of life and ecosystem. Engage in Biology with hands-on experiments.</p>
        </div>
    </section>

    <!--Foris labs for teachers -->
    <div class="bg-gradient-to-r from-primary to-primary-light">
        <div class="container flex flex-col md:flex-row items-center justify-between mx-auto"> 
            <div class="px-16 text-left w-1/2 ">
                <h2 class="text-white text-2xl font-bold mb-4 font-burbank">Foris Labs for Teachers</h2>
                <p class="text-white mb-4">Calling all educators! Foris Labs is your trusted partner for enriching science education. Access a diverse array of experiments aligned with your curriculum, track student progress, and create an interactive learning environment that promotes scientific inquiry. Our versatile platform can be used as an in-class teaching aid, seamlessly integrating technology into your lessons for an enriched learning experience.</p>
                <a href="https://calendly.com/forislabs/product-demo" class="inline-block border-4 border-white bg-transparent font-burbank text-white text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none font-black">
                    Book a Demo
                    <i class='fas fa-arrow-right ml-2 text-base'></i> <!-- Right arrow character -->
                </a>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('img/features/teacher-with-paper.png?sg') }}" alt="Teacher Image" class="h-72 m-20">
            </div>
        </div>  
    </div>
    


   
    <!-- Experience -->
    <section id="experience" class="experience2 relative bg-black lg:bg-white h-auto md:h-screen flex items-center justify-center">
        <!-- content will be inserted here -->
    </section>


   
    
      
      
      
      
      
      
      
      
      
      
      
      
   
    <script src="{{ asset('js/fslightbox.js') }}"></script>
</x-guest-layout>

{{--@script--}}
{{--<script>--}}
{{--    function highlightFirst(){--}}
{{--        let flexChildren = document.querySelector('.brands-box').children;--}}
{{--        let leftPosition = flexChildren[0].offsetLeft;--}}
{{--        let i = 0;--}}
{{--        for(let flexChild of flexChildren){--}}
{{--            i++--}}
{{--            if(flexChild.offsetLeft <= leftPosition && i >= 3){--}}
{{--                flexChild.classList.add('ml-12');--}}
{{--            }else{--}}
{{--                flexChild.classList.remove('ml-12');--}}
{{--            }--}}
{{--        }--}}
{{--    }--}}
{{--    window.addEventListener('resize', highlightFirst);--}}
{{--    highlightFirst();--}}
{{--</script>--}}
{{--@endscript--}}
