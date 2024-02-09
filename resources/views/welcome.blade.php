<x-guest-layout title="3d Virtual Science Laboratory">

    <section class="h-screen relative font-burbank">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center max-h-screen"
             style="background-image: url('{{ asset('img/redesign/image_015_0016.png') }}'); max-height:95vh;"></div>

        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-100"
             style="background-image: url('{{ asset('img/redesign/Rectangle 284.png') }}');max-height:95vh;"></div>

        <!-- Text Overlay on the image-->
        <div
            class="absolute top-1/2 ml-8 md:ml-10 lg:ml-20 left-1/8 transform -translate-y-1/2 text-white text-left font-burbank">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4">
                Learn Science through Games
                <br/>
                <span class="text-16A4E1">Anywhere, Anytime!</span>
            </h1>
            <p class="text-lg md:text-xl font-josefin">Gamified contents to learn
                complex science topics and experiments</p>

            <!-- Button for Booking a Demo -->
            <a href="#"
               class="inline-block mt-4 border border-white bg-16A4E1 text-white text-lg md:text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none uppercase font-burbank">
                Book a Demo
                <span class="ml-2">&#8594;</span> <!-- Right arrow -->
            </a>
        </div>


        <!-- Scroll-down Arrow Button -->
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2">
            <button @click="scrollToContent"
                    class="bg-16A4E1 text-white rounded-full p-3 hover:bg-0499D9 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </button>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="relative flex flex-col sm:flex-row items-center justify-start bg-white min-h-[550px]">

        <!-- Left Image -->
        <div class="absolute bottom-0 left-0 md:relative lg:w-1/5 sm:pr-1">
            <img src="{{ asset('img/redesign/a_boy_with_book.png') }}" alt="Brand Image"
                 class="lg:w-full h-72 md:h-auto">
        </div>

        <!-- Right Content -->
        <div class="w-full lg:w-4/5 lg:pr-12 px-6">
            <!-- Wording -->
            <p class="font-bold mb-6 text-4xl md:text-5xl text-16A4E1 font-burbank">Endorsed by Reputable Brands
                Worldwide</p>

            <!-- List of Brands -->
            <div class="w-2/3 md:w-full ml-auto flex flex-wrap p-4 space-x-4 space-y-4">
                <img src="{{ asset('img/brands/startup-south.png') }}" alt="startup-south"
                     class="sm:h-7 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/stanford.png') }}" alt="stanford"
                     class="sm:h-9 h-8  q sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/injini.png') }}" alt="injini"
                     class="sm:h-9 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/zenith-bank.svg') }}" alt="zenith-bank"
                     class="sm:h-9 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/techcrunch.svg') }}" alt="techcrunch"
                     class="sm:h-7 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/gesa-2023_white.webp') }}" alt="gesa"
                     class="sm:h-9 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/shifters-logo.png') }}" alt="gesa"
                     class="sm:h-7 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/seedstars.png') }}" alt="gesa"
                     class="sm:h-7 h-8 sm:w-30  filter grayscale opacity-60">
                <img src="{{ asset('img/brands/fitch.png') }}" alt="gesa"
                     class="sm:h-7 h-8 sm:w-30  filter grayscale opacity-60">
            </div>
        </div>

    </section>
    <!-- Slanted Div -->


    <div class="relative slant bg-16A4E1 left-0 right-0 skew-y-2 h-[550px] z-10">
        <div
            class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center max-w-screen-md"
            style="position: absolute; width: 100%; transform: skewY(-2deg) translate(-50%, -70%);">
            <div class="flex flex-col items-center justify-center h-full p-6">
                <h1 class="text-4xl font-bold" style="font-family: 'Dilo World', sans-serif;">WELCOME TO FORIS
                    LABS</h1>
                <p class="text-xl" style="font-family: Josefin Sans, sans-serif;">Your Gateway to Interactive Science
                    Education!<br> Immerse yourself in an engaging Virtual science Laboratory<br> experience designed to
                    bring science to life.<br> Join us on a captivating journey into the <br> world of science!</p>
            </div>
        </div>
    </div>


    <section
        class="relative flex flex-col md:flex-row lg:flex-row items-center space-y-8 z-10 pl-4 pr-4 md:pl-16 md:pr-16 lg:pl-40 lg:pr-40 -mt-40">
        <!-- Chemistry Section -->
        <div class="text-container text-center p-5">
            <img src="{{ asset('img/redesign/chemistry.png?s') }}" alt="Chemistry Image"
                 class="mx-auto w-80 h-auto lg:w-100">
            <h2 class="text-3xl font-bold mt-4 text-center font-burbank text-[#4EAE4C]">Chemistry</h2>
            <p class="text-lg font-bold mt-2 text-center" style="font-family:Josefin Sans,sans-serif;">Unlock the world
                of molecules and reactions. Explore chemistry with interactive experiments.</p>
        </div>

        <!-- Physics Section -->
        <div class="text-container text-center p-5">
            <img src="{{ asset('img/redesign/physics.png?fs') }}" alt="Physics Image"
                 class="mx-auto w-80 h-auto lg:w-100">
            <h2 class="text-3xl font-bold mt-4 text-center font-burbank text-[#4EAE4C]">Physics</h2>
            <p class="text-lg font-bold mt-2 text-center" style="font-family:Josefin Sans,sans-serif;">Dive into the law
                of motion, energy and beyond. Experience Physics with captivating simulations.</p>
        </div>

        <!-- Biology Section -->
        <div class="text-container text-center p-5">
            <img src="{{ asset('img/redesign/biology2.png?sg') }}" alt="Biology Image"
                 class="mx-auto w-80 h-auto lg:w-100">
            <h2 class="text-3xl font-bold mt-4 text-center font-burbank text-[#4EAE4C]">Biology</h2>
            <p class="text-lg font-bold mt-2 text-center" style="font-family:Josefin Sans,sans-serif;">Discover the
                wonders of life and ecosystem. Engage in Biology with hands-on experiments.</p>
        </div>
    </section>


    <!-- how we do it section -->
    <section class="section-container bg-16A4E1 flex flex-col px-8 lg:px-20 mt-10">


        <!-- Tired of boring classes -->
        <div
            class="flex flex-col md:flex-row items-center justify-center py-1 my-12 bg-0499D9 mx-auto">
            <!-- Left side with image -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/features/boring-straight.png') }}" alt="Image" class="w-full md:hidden">
                <img src="{{ asset('img/features/boring-slant.png') }}" alt="Image"
                     class="w-full hidden md:block max-w-[300px]">

            </div>

            <!-- Right side with text -->
            <div class="text-white text-center md:text-left p-4 md:p-0 md:pr-6">
                <h2 class="text-2xl md:text-4xl font-bold mb-4 font-burbank">Tired of boring Science Classes?</h2>
                <p class="text-base md:text-xl font-josefin">Get ready to transform any
                    space into your own laboratory with Foris Labs! We're an award-winning platform that unlocks the
                    magic of Science through immersive 3D virtual experiments and fun, gamified learning.</p>
            </div>
        </div>

        <!-- Imagine -->
        <div
            class="flex flex-col-reverse md:flex-row items-center justify-center mb-40 bg-0499D9 max-w-screen-lg mx-auto">
            <!-- left side with text -->
            <div class="text-white text-center md:text-left p-4 md:p-0 md:pl-6">
                <h2 class="text-2xl md:text-4xl font-bold mb-4 font-burbank">Imagine</h2>
                <p class="text-base md:text-xl font-josefin">Conducting explosive
                    chemistry experiments on your laptop or Dissecting a virtual frog without the fear factor. Better
                    still building a simulated rocket that soars into the stratosphere. With Foris Labs, all this and
                    more is just a tap away.</p>
            </div>
            <!-- right side with image -->
            <div class="flex items-center flex-shrink-0 pr-0">
                <img src="{{ asset('img/features/imagine-straight.png') }}" alt="Image" class="w-full md:hidden">
                <img src="{{ asset('img/features/imagine-slant.png') }}" alt="Image"
                     class="w-full hidden md:block max-w-[300px]">

            </div>
        </div>

        <!-- Tired of boring classes -->
        <div
            class="flex flex-col md:flex-row items-center justify-center bg-0499D9 max-w-screen-lg mx-auto overflow-visible">
            <!-- Left side with image -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/redesign/rectangle265.png') }}" alt="Image"
                     class="w-64 ml-2 md:ml-4 lg:ml-10 -mt-20 md:-mt-30 md:-mb-10">
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

        <button
            class="bg-FF9649 font-burbank text-2xl text-white border-2 border-white px-6 py-2 mb-20 mt-2 uppercase mx-auto max-w-md">
            Here's how we do it
        </button>

        <!-- First Row -->
        <div class="flex justify-center items-center mb-8 md:mb-16 max-w-screen-lg flex-col md:flex-row">
            <div
                class="flex justify-center items-start bg-0499D9 max-w-screen-lg mx-auto flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0 mb-0 sm:mb-4 lg:mb-0">
                    <img src="{{ asset('img/features/making-science-accessible.png') }}" alt="Image"
                         class="w-full md:w-64">
                </div>

                <!-- Right side with text -->
                <div class="text-white p-4 md:p-8 max-w-lg">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Making Science Accessible</h2>
                    <p class="text-lg md:text-xl" style="font-family:Josefin Sans,sans-serif;">No need to worry about
                        expensive
                        lab equipments, you can just pick up your device, learn and explore anywhere at anytime.</p>
                </div>
            </div>

            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/shapes/arrow-vertical.png') }}" alt="New Image"
                     class="h-20 md:hidden">
                <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                     class="ml-8 w-40 h-40 hidden md:block">
            </div>
        </div>

        <!-- Second row-->
        <div
            class="flex justify-center items-center mb-8 md:mb-16 max-w-screen-lg flex-col-reverse md:flex-row">
            <!-- Arrow image on the left -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/shapes/arrow-vertical.png') }}" alt="New Image"
                     class="h-20 md:hidden">
                <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                     class="mr-8 w-40 h-40 hidden md:block transform scale-x-[-1]">
            </div>

            <!-- Engaging & Interactive Section -->
            <div
                class="flex justify-center items-start bg-0499D9 max-w-screen-lg mx-auto flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                <!-- right side with image -->
                <div class="flex items-center flex-shrink-0 mb-0 sm:mb-4 lg:mb-0">
                    <img src="{{ asset('img/features/engaging-nd-interactive.png') }}" alt="Image"
                         class="w-full md:w-64">
                </div>

                <!-- Right side with text -->
                <div class="text-white p-4 md:p-8 max-w-lg">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Engaging & Interactive</h2>
                    <p class="text-lg md:text-xl" style="font-family:Josefin Sans,sans-serif;">Gamified learning keeps
                        you hooked, boosting your understanding and curiosity.</p>
                </div>
            </div>

        </div>

        <!-- Third Row -->
        <div class="flex justify-center items-center mb-8 md:mb-16 max-w-screen-lg flex-col md:flex-row">
            <div
                class="flex justify-center items-start bg-0499D9 max-w-screen-lg mx-auto flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/features/collaborative-learning.png') }}" alt="Image"
                         class="w-full md:w-64">
                </div>

                <!-- Right side with text -->
                <div class="text-white p-4 md:p-8 max-w-lg">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Collaborative Learning</h2>
                    <p class="text-lg md:text-xl" style="font-family:Josefin Sans,sans-serif;">Work with friends and
                        classmates
                        to solve scientific puzzles and make discoveries together.</p>
                </div>
            </div>

            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/shapes/arrow-vertical.png') }}" alt="New Image"
                     class="h-20 md:hidden">
                <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                     class="ml-8 w-40 h-40 hidden md:block">
            </div>
        </div>

        <!-- Fourth Row-->
        <div
            class="flex justify-center items-center mb-8 md:mb-16 max-w-screen-lg flex-col-reverse md:flex-row">
            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/shapes/arrow-vertical.png') }}" alt="New Image"
                     class="h-20 md:hidden">
                <img src="{{ asset('img/shapes/arrow-pointer.png') }}" alt="New Image"
                     class="mr-8 w-40 h-40 hidden md:block transform scale-x-[-1]">
            </div>

            <div
                class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/features/aligned-with-curriculum.png') }}" alt="Image"
                         class="w-full md:w-64">
                </div>

                <!-- Right side with text -->
                <div class="text-white p-4 md:p-8 max-w-lg">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Aligned with your Curriculum</h2>
                    <p class="text-lg md:text-xl font-josefin">Experiments match
                        real-world
                        science concepts, helping you ace those exams.</p>
                </div>
            </div>
        </div>

        <!-- Fifth Row -->
        <div class="flex justify-center items-center mb-8 md:mb-16 max-w-screen-lg flex-col md:flex-row">
            <div
                class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto flex-col md:flex-row p-0 sm:p-4 lg:p-0">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/features/empowering-teachers.png') }}" alt="Image" class="w-full md:w-64">
                </div>

                <!-- Right side with text -->
                <div class="text-white p-4 md:p-8 max-w-lg">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-burbank">Empowering
                        Teachers</h2>
                    <p class="text-lg md:text-xl font-josefin">Provide your students
                        with a
                        dynamic learning tool that sparks their imagination and ignites a passion for science.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="experience relative bg-white h-screen flex items-center justify-center">
        <!-- content will be inserted here -->
    </section>


    <!-- What people say-->
    <section class="bg-16A4E1 py-16 mb-0">
        <div class="max-w-screen-lg mx-auto px-6 text-center">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-white mb-8 font-burbank">What People Say</h2>

            <!-- Testimonials -->
            <div class="flex flex-col sm:flex-row gap-8">
                <!-- Testimonial Box 1 -->
                <div
                    class="bg-FF9D43 p-6 mb-4 sm:w-1/3 border-2 border-white text-left font-josefin flex flex-col justify-between">
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
                    class="bg-67249B p-6 mb-4 sm:w-1/3 border-2 border-white text-left font-josefin flex flex-col justify-between">
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
                    class="bg-1CBB6F p-6 mb-4 sm:w-1/3 border-2 border-white text-left font-josefin flex flex-col justify-between">
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
    </section>
    <div class="bg-16A4E1 top-0">
        <img src="{{ asset('img/redesign/Group134.png') }}" alt="Full Width Image" class="w-full h-auto">
    </div>
    <script src="{{ asset('js/fslightbox.js') }}"></script>
</x-guest-layout>
