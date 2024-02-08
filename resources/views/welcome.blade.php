<x-guest-layout title="3d Virtual Science Laboratory">

    <section class="h-screen relative" style="font-family: 'Burbank Big Condensed Black';">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/redesign/image_015_0016.png') }}'); max-height:95vh;"></div>
    
        <!-- Additional Background Image with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-100" style="background-image: url('{{ asset('img/redesign/Rectangle 284.png') }}');max-height:95vh;"></div>
    
        <!-- Text Overlay on the Left Side -->
        <div class="absolute top-1/2  lg:ml-20 left-1/8 md:ml-10 transform -translate-y-1/2 text-white text-left" style="font-family: 'Burbank Big Condensed Black', sans-serif;">
            <h1 class="text-6xl font-bold mb-4">Learn Science through Games</h1>
            <p class="text-6xl text-16A4E1">Anywhere, Anytime!</p>
            <p class="text-sm" style="font-family:Shantell Sans,cursive;">Gamified contents to learn complex science topics and experiments</p>

            <!-- Button for Booking a Demo -->
            <a href="#" class="inline-block mt-4 border border-white bg-blue-500 text-white text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none">
                Book a Demo
                <span class="ml-2">&#8594;</span> <!-- Right arrow character -->
            </a>
        </div>

    
        <!-- Scroll-down Arrow Button -->
        <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2">
            <button @click="scrollToContent"
                    class="bg-blue-500 text-white rounded-full p-3 hover:bg-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </button>
        </div>
    </section>
    
    <!-- Brands Section -->
    <div class="relative">
        
        <section class="flex flex-col sm:flex-row items-center justify-start mt-0 bg-white p-4">

            <!-- Left Image -->
            <div class="sm:w-1/2 lg:w-1/5   sm:pr-1">
                <img src="{{ asset('img/redesign/a_boy_with_book.png') }}" alt="Brand Image" class="lg:w-full lg:h-auto">
            </div>

            <!-- Right Content -->
            <div class="sm:w-1/2 lg:w-2/3 ">
                <!-- Wording -->
                <p class="font-bold mb-6 text-5xl text-16A4E1" style="font-family: 'Burbank Big Condensed Black';">Endorsed by Reputable Brands Worldwide</p>

                <!-- List of Brands -->
                <div class="flex flex-wrap justify-center">
                    <img src="{{ asset('img/brands/startup-south.png') }}" alt="startup-south" class="sm:h-7 h-5 sm:w-30 px-2 filter grayscale opacity-60">
                    <img src="{{ asset('img/brands/stanford.png') }}" alt="stanford" class="sm:h-9 h-5 sm:w-30 px-2 filter grayscale opacity-60">
                    <img src="{{ asset('img/brands/injini.png') }}" alt="injini" class="sm:h-9 h-5 sm:w-30 px-2 filter grayscale opacity-60">
                    <img src="{{ asset('img/brands/zenith-bank.svg') }}" alt="zenith-bank" class="sm:h-9 h-5 sm:w-30 px-2 filter grayscale opacity-60">
                    <img src="{{ asset('img/brands/techcrunch.svg') }}" alt="techcrunch" class="sm:h-7 h-5 sm:w-30 px-2 filter grayscale opacity-60">
                    <img src="{{ asset('img/brands/gesa-2023_white.webp') }}" alt="gesa" class="sm:h-7 h-5 sm:w-30 px-2 filter grayscale opacity-60">
                </div>
            </div>
            
        </section>
        <!-- Slanted Div -->
        <div class="absolute bg-16A4E1 top-25 left-0 right-0 h-20" style="transform:skewY(2deg); height:500px; top: 380px;"></div>
        
        <div class="relative top-20 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center max-w-screen-md" style="top: 120px">
            <h1 class="text-4xl font-bold p-10" style="font-family: 'Dilo World', sans-serif;">WELCOME TO FORIS LABS</h1>
            <p class="text-xl" style="font-family:Josefin Sans,sans-serif;">Your Gateway to Interactive Science Education!<br> Immerse yourself in an engaging Virtual science Laboratory<br> experience designed to bring science to life.<br> Join us on a captivating journey into the <br> world of science!</p>
        </div>

    </div>
    <div class="flex justify-center items-center space-x-8 relative z-10 pl-40 pr-40"style="width:90%;" >
        <!-- Chemistry Section -->
        <div class="text-container text-center">
            <img src="{{ asset('img/redesign/chemistry.png') }}" alt="Chemistry Image" class="w-22 h-22 " style="width: 240px; height: 260px;">
            <h2 class="text-3xl font-bold mt-1 text-left pl-4" style="font-family:'Burbank Big Condensed Black'; color:#4EAE4C; width:100%">Chemistry</h2>
            <p class="text-sm font-bold text-left pl-4" style="font-family:Josefin Sans,sans-serif;">Unlock the world of molecules and reactions. Explore chemistry with interactive experiments.</p>
        </div>
    
        <!-- Physics Section -->
        <div class="text-container text-center">
            <img src="{{ asset('img/redesign/physics.png') }}" alt="Physics Image" class="w-22 h-22 " style="width: 250px; height: 260px;">
            <h2 class="text-3xl font-bold mt-2 text-left pl-4" style="font-family:'Burbank Big Condensed Black'; color:#FF4343;">Physics</h2>
            <p class="text-sm font-bold text-left pl-4" style="font-family:Josefin Sans,sans-serif;">Dive into the law of motion, energy and beyond. Experience Physics with captivating simulations.</p>
        </div>
    
        <!-- Biology Section -->
        <div class="text-container text-center">
            <img src="{{ asset('img/redesign/biology2.png') }}" alt="Biology Image" class="w-22 h-22 " style="width: 250px; height: 260px;">
            <h2 class="text-3xl font-bold mt-2 text-left pl-4" style="font-family:'Burbank Big Condensed Black'; color:#FC9700;">Biology</h2>
            <p class="text-sm font-bold text-left pl-4" style="font-family:Josefin Sans,sans-serif;">Discover the wonders of life and ecosystem. Engage in Biology with hands-on experiments.</p>
        </div>
    </div>

    <!-- how we do it section -->
    <section class="section-container bg-16A4E1 flex flex-col pr-20 pl-20 mt-10">
        
    
        <!-- Tired of boring classes -->
        <div class="flex justify-center p-0 mb-20 bg-0499D9 items-start max-w-screen-lg mx-auto">
            <!-- Left side with image -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/redesign/Vector20.png') }}" alt="Image" class="w-20 h-20 mr-4" style="width: 300px; height: 300px;">
                
            </div>
        
            <!-- Right side with text -->
            <div class="text-white p-20 pb-0 whitespace-normal">
                <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Tired of boring Science Classes?</h2>
                <p class="text-xl" style="font-family:Josefin Sans,sans-serif;">Get ready to transform any space into your own laboratory with Foris Labs! We're an award-winning platform that unlocks the magic of Science through immersive 3D virtual experiments and fun, gamified learning.</p>
            </div>
        </div>

          <!-- Imagine -->
        <div class="flex justify-center p-0 mb-20 bg-0499D9 items-start max-w-screen-lg mx-auto">
            <!-- left side with text -->
            <div class="text-white p-20 pb-0 whitespace-normal">
               <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Imagine</h2>
               <p class="text-xl" style="font-family:Josefin Sans,sans-serif;">Conducting explosive chemistry experiments on your laptop or Dissecting a virtual frog without the fear factor. Better still building a simulated rocket that soars into the stratosphere. With Foris Labs, all this and more is just a tap away.</p>
           </div>
           <!-- right side with image -->
           <div class="flex items-center flex-shrink-0 pr-0">
               <img src="{{ asset('img/redesign/Vector21.png') }}" alt="Image" class="w-20 h-20 " style="width: 300px; height: 300px;">
               
           </div>
       </div>

        <!-- Tired of boring classes -->
        <div class="flex justify-center p-0  bg-0499D9 items-start max-w-screen-lg mx-auto overflow-visible">
            <!-- Left side with image -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/redesign/rectangle265.png') }}" alt="Image" class="w-20 h-40 ml-20 -mt-10 -mb-10 " style="width: 230px; height: 300px;">
            </div>
        
            <!-- Right side with text -->
            <div class="text-white p-20 pb-0 whitespace-normal">
                <h2 class="text-3xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">We're not just about cool simulations, though. We're revolutionizing science education for students of all backgrounds through gamification.</h2>
            </div>
        </div>
        
         <!-- Arrow pointing down -->
        <div class="flex justify-center items-start ">
            <img src="{{ asset('img/redesign/Vector26.png') }}" alt="arrow" class="h-20 w-6">
        </div>
        
        <button class="bg-FF9649 text-2xl text-white border-2 border-white px-6 py-2 mb-20 mt-2  uppercase mx-auto max-w-md" style="font-family:'Burbank Big Condensed Black';">Here's how we do it</button>

        <!-- First Row -->
        <div class="flex justify-center mb-20 max-w-screen-lg">
            <div class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/redesign/Rectangle277.png') }}" alt="Image" class="w-20 h-20 mr-4" style="width: 250px; height: 250px;">
                </div>
        
                <!-- Right side with text -->
                <div class="text-white p-8 pr-20 pb-0 whitespace-normal max-w-lg">
                    <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Making Science Accessible</h2>
                    <p class="text-base" style="font-family:Josefin Sans,sans-serif;">No need to worry about expensive lab equipments, you can just pick up your device, learn and explore anywhere at anytime.</p>
                </div>
            </div>
        
            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0 ml-8">
                <img src="{{ asset('img/redesign/Vector22.png') }}" alt="New Image" class="w-20 h-20" style="width: 150px; height: 150px;">
            </div>
        </div>

        <!-- Second row-->
         <div class="flex justify-center mb-20 max-w-screen-lg ml-8">
            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0 ml-8">
                <img src="{{ asset('img/redesign/Vector22.png') }}" alt="New Image" class="w-20 h-20 transform scale-x-[-1]" style="width: 150px; height: 150px;">
            </div>

            <div class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/redesign/Rectangle277.png') }}" alt="Image" class="w-20 h-20 mr-4" style="width: 250px; height: 250px;">
                </div>
        
                <!-- Right side with text -->
                <div class="text-white p-8 pr-20 pb-0 whitespace-normal max-w-lg">
                    <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Engaging & Interactive</h2>
                    <p class="text-base" style="font-family:Josefin Sans,sans-serif;">Gamified learning keeps you hooked, boosting your understanding and curiosity.</p>
                </div>
            </div>
        </div>

         <!-- third Row -->
         <div class="flex justify-center mb-20 max-w-screen-lg">
            <div class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/redesign/Rectangle277.png') }}" alt="Image" class="w-20 h-20 mr-4" style="width: 250px; height: 250px;">
                </div>
        
                <!-- Right side with text -->
                <div class="text-white p-8 pr-20 pb-0 whitespace-normal max-w-lg">
                    <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Collaborative Learning</h2>
                    <p class="text-base" style="font-family:Josefin Sans,sans-serif;">Work with friends and classmates to solve scientific puzzles and make discoveries together.</p>
                </div>
            </div>
        
            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0 ml-8">
                <img src="{{ asset('img/redesign/Vector22.png') }}" alt="New Image" class="w-20 h-20" style="width: 150px; height: 150px;">
            </div>
        </div>

         <!-- fourth Row-->
         <div class="flex justify-center mb-20 max-w-screen-lg ml-8">
            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0 ml-8">
                <img src="{{ asset('img/redesign/Vector22.png') }}" alt="New Image" class="w-20 h-20 transform scale-x-[-1]" style="width: 150px; height: 150px;">
            </div>

            <div class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/redesign/Rectangle277.png') }}" alt="Image" class="w-20 h-20 mr-4" style="width: 250px; height: 250px;">
                </div>
        
                <!-- Right side with text -->
                <div class="text-white p-8 pr-20 pb-0 whitespace-normal max-w-lg">
                    <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Alligned with your Curriculum</h2>
                    <p class="text-base" style="font-family:Josefin Sans,sans-serif;">Experiments match real-world science concepts, helping you ace those exams.</p>
                </div>
            </div>
        </div>
        
        <!-- Fifth Row -->
        <div class="flex justify-center mb-20 max-w-screen-lg">
            <div class="flex justify-center items-start bg-0499D9  max-w-screen-lg mx-auto">
                <!-- Left side with image -->
                <div class="flex items-center flex-shrink-0">
                    <img src="{{ asset('img/redesign/Rectangle277.png') }}" alt="Image" class="w-20 h-20 mr-4" style="width: 250px; height: 250px;">
                </div>
        
                <!-- Right side with text -->
                <div class="text-white p-8 pr-20 pb-0 whitespace-normal max-w-lg">
                    <h2 class="text-4xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Empowering Teachers</h2>
                    <p class="text-base" style="font-family:Josefin Sans,sans-serif;">Provide your students with a dynamic learning tool that sparks their imagination and ignites a passion for science.</p>
                </div>
            </div>
        
            <!-- Arrow image on the right -->
            <div class="flex items-center flex-shrink-0 ml-8 hidden">
                <img src="{{ asset('img/redesign/Vector22.png') }}" alt="New Image" class="w-20 h-20" style="width: 150px; height: 150px;">
            </div>
        </div>
         
    </section>

     <!-- Experience -->
        <!-- New Div with White Background Full Width -->
        <section class="experience relative bg-white h-screen flex items-center justify-center">
            <!-- Stretched Image with Black and White Filter -->
            <img src="{{ asset('img/redesign/team-smile.jpg') }}" alt="Stretched Image" class="w-full h-80 object-cover grayscale">
            
            <!-- Overlay Image with Blue Border and Linear Gradient -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-black ">
                <div class="relative">
                  <img src="{{ asset('img/redesign/team-smile.jpg') }}" alt="Overlay Image" class="w-full border-4 border-blue-500  shadow-lg object-cover ";>
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-black  opacity-400"></div>

                    
                    <div class="absolute top-1/2 left-1/4 inset-0 transform -translate-x-1/2 -translate-y-1/2 text-white text-left" style="margin-left: 80px">
                        <h2 class="text-3xl font-bold mb-4" style="font-family:'Burbank Big Condensed Black';">Experience Foris Labs in Action Now!</h2>
                        <p class="text-base mb-4"style="font-family:Josefin Sans,sans-serif;">Are you ready to revolutionize science education or take your institution's teaching to the next level?.</p>
                        <p class="text-base mb-4"style="font-family:Josefin Sans,sans-serif;">Witness firsthand how our virtual science laboratory can transform the way you learn and teach science.</p>
                         <!-- Button for Booking a Demo -->
                        <a href="#" class="inline-block mt-4 border border-white bg-transperent text-white text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none"style="font-family:'Burbank Big Condensed Black';">
                            Book a Demo
                            <span class="ml-2 font-bold">&#8594;</span> <!-- Right arrow character -->
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What people say-->
        <section class="bg-16A4E1 py-16 mb-0">
            <div class="max-w-screen-lg mx-auto text-center">
                <!-- Title -->
                <h2 class="text-4xl font-bold text-white mb-8" style="font-family:'Burbank Big Condensed Black';">What People Say</h2>
        
                <!-- Testimonials -->
                <div class="flex flex-col sm:flex-row gap-8">
                    <!-- Testimonial Box 1 -->
                    <div class="bg-FF9D43 p-6 mb-4 sm:w-1/3 border-2 border-white text-left" style="font-family:Josefin Sans,sans-serif;">
                        <p class="text-white">"Foris Labs presented me with a large variety of learning assets and an amazing virtual reality experience. It strengthened my knowledge of chemistry and helped me approach my laboratory praticals with confidence."</p>
                        <p class="text-white font-bold mt-4 text-left">Emmanuel</p>
                        <p class="text-white ">SS3 Student (Christ the King College)</p>
                    </div>
        
                    <!-- Testimonial Box 2 -->
                    <div class="bg-67249B p-6 mb-4 sm:w-1/3 border-2 border-white text-left"style="font-family:Josefin Sans,sans-serif;">
                        <p class="text-white">"Merely playing the acid-base titration game made me more excited to study my science textbooks. I love games and Foris Labs gave me the opportunity to learn while playing. This app has become my best friend!."</p>
                        <p class="text-white font-bold mt-4 text-left">Henry</p>
                        <p class="text-white">SS3 Student</p>
                    </div>
        
                    <!-- Testimonial Box 3 -->
                    <div class="bg-1CBB6F p-6 mb-4 sm:w-1/3 border-2 border-white text-left"style="font-family:Josefin Sans,sans-serif;">
                        <p class="text-white">"Merely playing the acid-base titration game made me more excited to study my science textbooks. I love games and Foris Labs gave me the opportunity to learn while playing. This app has become my best friend!."</p>
                        <p class="text-white font-bold mt-4 text-left">Ifeoma</p>
                        <p class="text-white text-left">Science Teacher at Archbishop Heerey Technical College</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-16A4E1 top-0">
            <img src="{{ asset('img/redesign/Group134.png') }}" alt="Full Width Image" class="w-full h-auto">
        </div>
       <script src="{{ asset('js/fslightbox.js') }}"></script>
</x-guest-layout>
