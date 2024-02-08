<x-guest-layout title="Contact Us">

       

    <!-- Contact Us Section -->
    <section class="bg-white text-white py-20">
        <!-- Blue Background Flexed Div -->
        <div class="bg-16A4E1 w-full p-8 flex flex-col items-center justify-center space-y-4 mt-20">
            <!-- Text Section -->
            <div class="text-left">
                <h2 class="text-4xl font-bold"style="font-family: Burbank Big Condensed Black">Get in Touch</h2>
                <p class="mb-4"style="font-family:Josefin Sans,sans-serif;">For enquiries, complaints, and special requests, please fill the contact form below and send a message.</p>
            
                <form class="w-full text-xl" style="font-family: Burbank Big Condensed Black" method="POST" action="">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <input required type="text" placeholder="Name" name="name" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3 leading-tight focus:outline-none ">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <input required type="email" placeholder="Email" name="email" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3 leading-tight focus:outline-none ">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                        <input required type="text" placeholder="Subject" name="subject" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3 leading-tight focus:outline-none">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                        <textarea required id="message" name="message" class="placeholder-white appearance-none block w-full bg-transparent text-white border-2 border-white py-3 px-4 mb-3  focus:outline-none" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <button type="submit" class="bg-white text-16A4E1 py-1 px-3 transform skew-y-10 flex items-center">
                            Send Message
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2 transform -skew-y-10 h-6 w-6 fill-current">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M3 13h6v-2H3V1.846a.5.5 0 0 1 .741-.438l18.462 10.154a.5.5 0 0 1 0 .876L3.741 22.592A.5.5 0 0 1 3 22.154V13z"/>
                                </g>
                            </svg>
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="border-4 border-black p-2 max-w-sm flex items-center mt-16">
                <!-- Image -->
                <img src="{{ asset('img/redesign/blue-envelope.png') }}" alt="Your Image" class="w-1/3 h-auto mr-4">
        
                <!-- Text -->
                <div>
                    <h2 class="text-2xl font-bold text-black" style="font-family: 'Burbank Big Condensed Black';">Contact Mail</h2>
                    <p class="text-sm text-black" style="font-family: Josefin Sans, sans-serif;">helpdesk@forislabs.com</p>
                </div>
            </div>
        </div>
        
        
        
    </section>
    
    
</x-guest-layout>
