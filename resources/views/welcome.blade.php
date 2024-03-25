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
    <section class="relative flex flex-col md:flex-row items-center justify-start bg-white min-h-96">

        <!-- Left Image -->
        <div class="absolute left-0 hidden md:block top-0">
            <img src="{{ asset('img/redesign/a_boy_with_book.png') }}" alt="Brand Image"
                 class="md:w-72 h-72 md:h-auto">
        </div>

        <!-- Right Content -->
        <div class="container max-w-5xl mx-auto px-4 md:px-8 md:mt-10">
            <!-- Wording -->
            <p class="font-bold mb-6 text-4xl md:text-5xl md:ml-20 text-16A4E1 font-burbank">
                Endorsed by Reputable Brands Worldwide
            </p>

            <!-- List of Brands -->
            <div class="brands-box flex flex-wrap justify-start w-full md:justify-center">
                <img src="{{ asset('img/brands/startup-south.png') }}" alt="startup-south"
                     class="sm:h-10 h-7 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/stanford.png') }}" alt="stanford"
                     class="sm:h-10 h-7 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/zenith-bank.svg') }}" alt="zenith-bank"
                     class="sm:h-10 h-8 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6  my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/injini.png') }}" alt="injini"
                     class="sm:h-10 h-8 px-2 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/techcrunch.svg') }}" alt="techcrunch"
                     class="sm:h-9 h-7 px-2 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4 filter grayscale opacity-60">
                <img src="{{ asset('img/brands/gesa-2023_white.webp') }}" alt="gesa"
                     class="sm:h-8 h-8 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4 filter grayscale opacity-60">
                <img src="{{ asset('img/brands/shifters-logo.png') }}" alt="gesa"
                     class="sm:h-8 h-8 px-0.5 md:px-2 py-0.5  ml-2.5 md:ml-6 my-4   filter grayscale opacity-60">
                <img src="{{ asset('img/brands/seedstars.png') }}" alt="gesa"
                     class="sm:h-8 h-7 px-0.5 md:px-2 py-0.5 ml-2.5 md:ml-6 my-4 filter grayscale opacity-60">
                <img src="{{ asset('img/brands/fitch.png') }}" alt="fitch"
                     class="sm:h-12 h-12  px-1 py-0.5  ml-2.5 md:ml-6 filter grayscale opacity-60">
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


    <!-- how we do it section -->
    <section class="section-container bg-gradient-to-b from-primary to-primary-light flex flex-col mt-10">

        <div class="container max-w-7xl mx-auto">

            <!-- Tired of boring classes -->
            <div
                class="flex flex-col md:flex-row items-center justify-center my-12 bg-0499D9 mx-8 md:mx-20">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/features/thinking-straight.png') }}" alt="Image" class="w-full md:hidden">
                    <img src="{{ asset('img/features/thinking-slant.png') }}" alt="Image"
                         class="w-full hidden md:block max-w-[300px]">

                </div>

                <!-- Right side with text -->
                <div class="text-white text-center md:text-left p-4 md:p-0 md:pr-6">
                    <h2 class="text-2xl md:text-4xl font-bold mb-4 font-burbank">Tired of boring Science Classes?</h2>
                    <p class="text-base md:text-xl font-arlon">Get ready to transform any
                        space into your own laboratory with Foris Labs! We're an award-winning platform that unlocks the
                        magic of Science through immersive 3D virtual experiments and fun, gamified learning.</p>
                </div>
            </div>

            <!-- Imagine -->
            <div
                class="flex flex-col-reverse md:flex-row items-center justify-center mb-40 bg-0499D9 mx-8 md:mx-20">
                <!-- left side with text -->
                <div class="text-white text-center md:text-left p-4 md:p-0 md:pl-6">
                    <h2 class="text-2xl md:text-4xl font-bold mb-4 font-burbank">Imagine</h2>
                    <p class="text-base md:text-xl font-arlon">Conducting explosive
                        chemistry experiments on your laptop or Dissecting a virtual frog without the fear factor.
                        Better
                        still building a simulated rocket that soars into the stratosphere. With Foris Labs, all this
                        and
                        more is just a tap away.</p>
                </div>
                <!-- right side with image -->
                <div class="flex items-center flex-shrink-0 pr-0">
                    <img src="{{ asset('img/features/rocket-straight.png') }}" alt="Image" class="w-full md:hidden">
                    <img src="{{ asset('img/features/rocket-slant.png') }}" alt="Image"
                         class="w-full hidden md:block max-w-[300px]">

                </div>
            </div>

            <!-- Tired of boring classes -->
            <div class="flex flex-col md:flex-row items-center justify-center bg-0499D9 mx-auto overflow-visible">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/features/girls-group.png') }}" alt="girls group"
                         class="w-full md:w-64 md:ml-10 md:-mt-20 md:-mb-10">
                </div>

                <!-- Right side with text -->
                <div class="text-white text-center md:text-left p-4 md:p-4 lg:p-8 pb-0">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 leading-10 font-burbank">We're not just about cool
                        simulations,
                        though. We're revolutionizing science education for students of all
                        backgrounds through gamification.</h2>
                </div>
            </div>

            <!-- Arrow pointing down -->
            <div class="flex justify-center items-start ">
                <img src="{{ asset('img/shapes/arrow-vertical.png') }}" alt="arrow" class="h-20 w-6">
            </div>

            <div class="flex justify-center">
                <button
                    class="bg-FF9649 font-burbank text-3xl md:text-2xl text-white border-4 border-white px-6 py-2 mb-20 mt-2 uppercase max-w-md font-black">
                    Here's how we do it
                </button>
            </div>

            <!-- First Row -->
            <div class="flex justify-center items-center md:mb-16 max-w-screen-lg flex-col md:flex-row">
                <div
                    class="flex justify-center items-start bg-0499D9 max-w-screen-lg mx-8 flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                    <!-- Left side with image -->
                    <div class="flex items-center flex-shrink-0 mb-0 sm:mb-4 lg:mb-0">
                        <img src="{{ asset('img/features/making-science-accessible.png') }}" alt="Image"
                             class="w-full md:w-64">
                    </div>

                    <!-- Right side with text -->
                    <div class="text-white text-center md:text-left p-4 md:p-8 max-w-lg">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Making Science Accessible</h2>
                        <p class="text-base md:text-xl font-arlon">No need to worry
                            about
                            expensive
                            lab equipments, you can just pick up your device, learn and explore anywhere at anytime.</p>
                    </div>
                </div>

                <!-- Arrow image on the right -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                         class="ml-8 w-40 h-40 hidden md:block">
                </div>
            </div>

            <!-- Second row-->
            <div
                class="flex justify-center items-center md:mb-16 ml-auto max-w-screen-lg flex-col-reverse md:flex-row">
                <!-- Arrow image on the left -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                         class="mr-8 w-40 h-40 hidden md:block transform scale-x-[-1]">
                </div>

                <!-- Engaging & Interactive Section -->
                <div
                    class="flex justify-center items-start bg-0499D9 max-w-screen-lg mx-8 flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                    <!-- right side with image -->
                    <div class="flex items-center flex-shrink-0 mb-0 sm:mb-4 lg:mb-0">
                        <img src="{{ asset('img/features/engaging-nd-interactive.png') }}" alt="Image"
                             class="w-full md:w-64">
                    </div>

                    <!-- Right side with text -->
                    <div class="text-white text-center md:text-left p-4 md:p-8 max-w-lg">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Engaging & Interactive</h2>
                        <p class="text-base md:text-xl font-arlon">Gamified learning
                            keeps
                            you hooked, boosting your understanding and curiosity.</p>
                    </div>
                </div>

            </div>

            <!-- Third Row -->
            <div class="flex justify-center items-center md:mb-16 max-w-screen-lg flex-col md:flex-row">
                <div
                    class="flex justify-center items-start bg-0499D9 max-w-screen-lg mx-8 flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                    <!-- Left side with image -->
                    <div class="flex items-center flex-shrink-0">
                        <img src="{{ asset('img/features/collaborative-learning.png') }}" alt="Image"
                             class="w-full md:w-64">
                    </div>

                    <!-- Right side with text -->
                    <div class="text-white text-center md:text-left p-4 md:p-8 max-w-lg">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Collaborative Learning</h2>
                        <p class="text-base md:text-xl font-arlon">Work with friends and
                            classmates
                            to solve scientific puzzles and make discoveries together.</p>
                    </div>
                </div>

                <!-- Arrow image on the right -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                         class="ml-8 w-40 h-40 hidden md:block">
                </div>
            </div>

            <!-- Fourth Row-->
            <div
                class="flex justify-center items-center  md:mb-16 ml-auto max-w-screen-lg flex-col-reverse md:flex-row">
                <!-- Arrow image on the right -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                         class="mr-8 w-40 h-40 hidden md:block transform scale-x-[-1]">
                </div>

                <div
                    class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-8 flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                    <!-- Left side with image -->
                    <div class="flex items-center flex-shrink-0">
                        <img src="{{ asset('img/features/aligned-with-curriculum.png') }}" alt="Image"
                             class="w-full md:w-64">
                    </div>

                    <!-- Right side with text -->
                    <div class="text-white text-center md:text-left p-4 md:p-8 max-w-lg">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Aligned with your Curriculum</h2>
                        <p class="text-base md:text-xl font-arlon">Experiments match
                            real-world
                            science concepts, helping you ace those exams.</p>
                    </div>
                </div>
            </div>

            <!-- Fifth Row -->
            <div class="flex justify-center items-center mb-8 md:mb-16 max-w-screen-lg flex-col md:flex-row">
                <div
                    class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-8 flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                    <!-- Left side with image -->
                    <div class="flex items-center flex-shrink-0">
                        <img src="{{ asset('img/features/empowering-teachers.png') }}" alt="Image"
                             class="w-full md:w-64">
                    </div>

                    <!-- Right side with text -->
                    <div class="text-white text-center md:text-left p-4 md:p-8 max-w-lg">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Empowering
                            Teachers</h2>
                        <p class="text-base md:text-xl font-arlon">Provide your students
                            with a
                            dynamic learning tool that sparks their imagination and ignites a passion for science.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="experience relative bg-black lg:bg-white h-auto md:h-screen flex items-center justify-center">
        <!-- content will be inserted here -->
    </section>


    <!-- What people say-->
    <section class="bg-56E1FF mb-0">
        <div class="max-w-screen-lg mx-auto px-6 text-center">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-white pt-4 md:pt-16 mb-8 font-burbank">What People Say</h2>

            <!-- Testimonials -->
            <div class="flex flex-col sm:flex-row gap-8">
                <!-- Testimonial Box 1 -->
                <div
                    class="bg-FF9D43 p-6 mb-4 sm:w-1/3 border-2 border-white text-left font-arlon flex flex-col justify-between">
                    <p class="text-white">"Foris Labs presented me with a large variety of learning assets and an
                        amazing virtual reality experience. It strengthened my knowledge of chemistry and helped me
                        approach my laboratory practicals with confidence."</p>
                    <div class="mt-8">
                        <p class="text-white font-bold text-left">Emmanuel</p>
                        <p class="text-white ">SS3 Student (Christ the King College)</p>
                    </div>
                </div>

                <!-- Testimonial Box 2 -->
                <div
                    class="bg-67249B p-6 mb-4 sm:w-1/3 border-2 border-white text-left font-arlon flex flex-col justify-between">
                    <p class="text-white">"Merely playing the acid-base titration game made me more excited to study my
                        science textbooks. I love games and Foris Labs gave me the opportunity to learn while playing.
                        This app has become my best friend!."</p>
                    <div class="mt-8">
                        <p class="text-white font-bold text-left">Henry</p>
                        <p class="text-white">SS3 Student</p>
                    </div>
                </div>

                <!-- Testimonial Box 3 -->
                <div
                    class="bg-1CBB6F p-6 mb-4 sm:w-1/3 border-2 border-white text-left font-arlon flex flex-col justify-between">
                    <p class="text-white">"Foris labs is helping me drive engagement in my classes. I particularly love
                        that it is tailored towards the recent
                        development in our curriculum which
                        is learner-centric model of teaching.
                        My students are able to work on their
                        own pace because the app provides
                        them the laboratory on their palms.

                        "</p>
                    <div class="mt-8">
                        <p class="text-white font-bold text-left">Ifeoma</p>
                        <p class="text-white text-left">Science Teacher at Archbishop Heerey Technical College</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row relative mt-10">
            <div class="h-96 w-full lg:w-1/4 bg-56E1FF text-white relative flex items-center justify-center">
              <img src="{{ asset('img/features/happy-girl.png') }}" alt="Happy Girl" class="sm:w-full md:hidden h-96">
            </div>
            <div class="h-96 w-full md:w-3/4 bg-white flex items-center justify-center relative">
                <div class="max-w-full md:max-w-2xl mx-8 md:mx-auto text-center">
                    <p class="text-16A4E1 text-left font-bold text-4xl lg:text-5xl font-burbank">
                      Join our thriving community of science enthusiasts and experience the future of learning.
                    </p>
                    <!-- Black Box with Text -->
                    <div class="bg-262626 text-white p-4 mt-4 md:w-4/5">
                      <p class="text-4xl md:text-5xl text-left font-bold font-burbank">
                        Start your scientific adventure with us today!
                      </p>
                    </div>
                </div>
                  
            </div>
            <img src="{{ asset('img/features/happy-girl.png') }}" alt="Overlay Image" class="hidden md:block absolute top-1/2 left-1/4 transform -translate-x-1/2 -translate-y-1/2 h-96">
        </div>
        
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
