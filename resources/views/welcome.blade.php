<x-guest-layout title="3d Virtual Science Laboratory">

    <section id="hero" class="bg-orange-50">
        <div class="container mx-auto px-8 md:px-12 lg:px-16 pt-24 flex flex-col lg:flex-row items-start">
            <div
                class="flex flex-col w-full lg:w-6/12 lg:pt-16 justify-center items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true"
                    class="my-4 text-4xl md:text-5xl font-bold leading-tight text-blue-950 aos-init">Conduct
                    science experiments <span class="text-orange-500">anywhere, anytime!</span>
                </h1>

                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                   class="leading-normal text-xl mb-8 aos-init aos-animate">Now anyone can conduct standard science
                    experiments from anywhere in the world with just a smartphone</p>

                <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" data-aos-anchor-placement="top-bottom"
                     class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5 aos-init">
                    <button
                        class="bg-orange-500 text-white text-xl font-bold rounded-full py-4 px-8 hover:bg-orange-400">
                        Book a Demo
                    </button>
                    <div
                        class="flex items-center justify-center space-x-3 mt-5 md:mt-0 hover:scale-110 transition-transform duration-300">
                        <button class="bg-white w-14 h-14 rounded-full flex items-center justify-center shadow">
                            <svg viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="w-5 h-5 ml-2 text-orange-500">
                                <path
                                    d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                        <span class="cursor-pointer text-lg">Watch how it works</span>
                    </div>
                </div>
            </div>

            <div id="girl" class="w-full lg:w-6/12 relative">
                <img data-aos="fade-up" data-aos-once="true" src="{{asset('/img/laptop-mockup.png')}}"
                     class="w-full mx-auto -mt-12 mb-20 aos-init" alt="">

                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
                     class="absolute top-4 -left-6 sm:top-16 sm:left-10 md:top-24 md:left-16 lg:-left-0 lg:top-40 animate-float-3 aos-init">
                    <img src="{{asset('/img/science-icons/meter.png')}}" class="h-12 sm:h-16" alt="">
                </div>

                <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true"
                     class="absolute top-4 right-10 sm:right-24 sm:top-12 md:top-16 md:right-32 lg:top-24 lg:right-16 animate-float-4 aos-init">
                    <img src="{{asset('/img/science-icons/book.png')}}" alt="" class="h-8 sm:h-12">
                </div>

                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                     class="absolute bottom-20 -left-4 sm:left-2 sm:bottom-24 lg:bottom-36 lg:-left-4 animate-float-5 aos-init">
                    <img src="{{asset('/img/science-icons/brain.png')}}" alt="" class="h-8 sm:h-12">
                </div>

                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" data-aos-anchor-placement="top-bottom"
                     class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 animate-float-3 aos-init">
                    <img src="{{asset('/img/science-icons/orbital.png')}}" alt="" class="h-12 sm:h-16">
                </div>
            </div>
        </div>
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-20 relative">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none" class="xl:h-40 xl:w-full">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                      fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-12 -mt-px"></div>
        </div>
    </section>

    <section id="sponsors">
        <div class="container mx-auto px-4 md:px-12 lg:px-16">
            <h2 class="text-center mb-3 text-gray-400 font-medium">Endorsed by reputable brands worldwide</h2>
            <div class="grid grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">
                <img src="{{ asset('img/brands/startup-south.png') }}" alt="startup-south"
                     class="h-7 grayscale opacity-60">
                <img src="{{ asset('img/brands/stanford.png') }}" alt="stanford" class="h-9 grayscale opacity-60">
                <img src="{{ asset('img/brands/injini.png') }}" alt="injini" class="h-9 grayscale opacity-60">
                <img src="{{asset('img/brands/zenith-bank.svg')}}" alt="zenith-bank" class="h-9 grayscale opacity-60">
                <img src="{{asset('img/brands/techcrunch.svg')}}" alt="techcrunch" class="h-8 grayscale opacity-60">
                <img src="{{asset('img/brands/grab.svg')}}" alt="grab" class="h-7">
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container mx-auto px-4  md:px-12 lg:px-16 py-12">
            <div data-aos="flip-up" class="max-w-3xl mx-auto text-center aos-init aos-animate">
                <h2 class="font-bold text-blue-950 my-3 text-3xl">
                    Welcome to <span class="text-orange-500">Foris Labs</span>?
                </h2>
                <p class="leading-relaxed text-gray-600 text-md md:text-lg"> Your Gateway to Interactive Science
                    Education! Immerse
                    yourself in an engaging virtual laboratory experience designed to bring science to life. Join us on
                    a captivating journey into the world of science!
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-14 md:gap-4 mt-16">
                <div data-aos="fade-up" class="bg-white shadow p-6 text-center rounded-xl aos-init">
                    <div
                        class="rounded-full w-16 h-16 flex items-center justify-center mx-auto bg-blue-500 shadow-lg -mt-12 mb-12">
                        <svg viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white">
                            <path
                                d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                                fill="white"></path>
                        </svg>
                        {{--                        <img src="{{asset('img/chemistry.png')}}" class="w-48 h-48" alt="ff">--}}
                    </div>
                    <h1 class="font-medium text-xl mb-3 lg:px-14 text-blue-950">Chemistry</h1>
                    <p class="px-4 text-gray-500">Simple and secure control of your organization’s financial and legal
                        transactions. Send customized invoices and contracts</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="150"
                     class="bg-white shadow p-6 text-center rounded-xl aos-init">
                    <div
                        class="rounded-full w-16 h-16 flex items-center justify-center mx-auto bg-orange-500 shadow-lg -mt-12 mb-12">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white">
                            <path
                                d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
                                fill="#F5F5FC"></path>
                            <path
                                d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
                                fill="#F5F5FC"></path>
                            <path fill="#F5F5FC"
                                  d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"></path>
                        </svg>
                    </div>
                    <h1 class="font-medium text-xl mb-3 lg:px-14 text-blue-950">Physics</h1>
                    <p class="px-4 text-gray-500">Schedule and reserve classrooms at one campus or multiple campuses.
                        Keep
                        detailed records of student attendance</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300"
                     class="bg-white shadow p-6 text-center rounded-xl aos-init">
                    <div
                        class="rounded-full w-16 h-16 flex items-center justify-center mx-auto bg-blue-500 shadow-lg -mt-12 mb-12">
                        <svg viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white">
                            <path fill="white"
                                  d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"></path>
                        </svg>
                    </div>
                    <h1 class="font-medium text-xl mb-3 lg:px-14 text-blue-950">Biology</h1>
                    <p class="px-4 text-gray-500">Automate and track emails to individuals or groups. Skyline’s
                        built-in system helps organize your organization </p></div>
            </div>
        </div>

    </section>

    <section id="for-educators">
        <div class="container mx-auto px-4 md:px-12 lg:px-16 py-8 overflow-hidden">
            <div class="flex flex-col-reverse md:flex-row items-center md:space-x-10">
                <div data-aos="fade-right" class="md:w-5/12 aos-init aos-animate py-6 md:py-0">
                    <figure class="md:w-11/12">
                        <img src="{{asset('/img/teacher-pointing2.png')}}" alt="">
                        <figcaption class="text-xs text-center text-gray-300"><a
                                href="https://www.freepik.com/free-photo/positive-college-student-has-dark-skin-carries-folders-book-points-with-cheerful-expression-aside-has-toothy-smile_11407358.htm#query=teachers&position=13&from_view=search&track=sph">Image
                                by wayhomestudio</a>
                        </figcaption>
                    </figure>
                </div>
                <div data-aos="fade-left" class="md:w-7/12 md:transform md:-translate-y-6 aos-init aos-animate">
                    <h1 class="font-bold text-blue-950 text-3xl lg:pr-36 mb-6">Foris Labs
                        <span class="text-orange-500">For Teachers </span>
                    </h1>
                    <p class="text-gray-600 text-md md:text-lg mb-12 lg:pr-32">Calling all educators! Foris Labs is your
                        trusted
                        partner for
                        enriching science education. Access a diverse array of experiments aligned
                        with your curriculum, track student progress, and create an interactive learning environment
                        that promotes scientific inquiry. Our versatile platform can be used as an in-class teaching
                        aid, seamlessly integrating technology into your lessons for an enriched
                        learning experience.</p>
                    <button
                        class="bg-orange-500 text-white text-xl font-bold rounded-full py-4 px-8 hover:bg-orange-400 mb-4">
                        Book a Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="for-students">
        <div class="container mx-auto px-4 md:px-12 lg:px-16 py-8 overflow-hidden">
            <div class="flex flex-col md:flex-row items-center md:space-x-10">
                <div data-aos="fade-right" class="md:w-1/2 aos-init">
                    <h1 class="text-blue-950 font-bold text-3xl lg:pr-24">
                        Foris Labs <span class="text-orange-500">For Students</span>
                    </h1>
                    <p class="text-gray-600 text-md md:text-lg my-4 lg:pr-16">Embrace your curiosity and embark on a
                        captivating
                        scientific journey with Foris Labs! Discover hands-on experiments, engaging simulations, and the
                        freedom to build a solid foundation in science at your own pace. Whether you're studying,
                        nurturing your curiosity, or dreaming of a future in science, Foris Labs is your vibrant gateway
                        to a world of discovery.
                    </p>
                </div>
                <figure class="md:w-1/2 ">
                    <img data-aos="fade-left" src="{{asset('/img/student-with-tablet.png')}}"
                         class="aos-init aos-animate" alt="">
                    <figcaption class="text-xs text-center text-gray-300"><a
                            href="https://www.freepik.com/free-photo/serious-curly-female-student-studies-online-uses-modern-teblet-wears-spectacles-casual-clothes-browses-internet-poses-outside-against-blurred-background-freelancer-thinks-about-strategy-project_25907629.htm#query=student%20using%20a%20tablet&position=4&from_view=search&track=ais">Image
                            by wayhomestudio</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section id="for-schools">
        <div class="container mx-auto px-4 md:px-12 lg:px-16 py-8 overflow-hidden">
            <div class="flex flex-col-reverse md:flex-row mt-6 md:space-x-10 items-center">
                <div data-aos="fade-down" class="md:w-7/12 mt-20 md:mt-0 relative aos-init aos-animate">
                    <div class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse"
                         style="background: rgb(51, 239, 160);"></div>
                    <div class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping"
                         style="background: rgb(51, 217, 239);"></div>
                    <figure class="md:w-11/12">
                        <img src="{{asset('img/designer-fashion.jpg')}}" alt=""
                             class="relative z-50 rounded-xl animate-float-3">
                        <figcaption class="text-xs text-center text-gray-300">
                            <a href="https://www.freepik.com/free-photo/designer-fashion_5403096.htm#query=school%20proprietor&position=9&from_view=search&track=ais">Image
                                by pressfoto</a>
                        </figcaption>
                    </figure>
                    <div class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"
                         style="background: rgb(91, 97, 235);"></div>
                    <div class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"
                         style="background: rgb(245, 102, 102);"></div>
                </div>
                <div data-aos="fade-down" class="md:w-5/12 text-gray-600 text-md md:text-lg aos-init aos-animate">
                    <h1 class="text-blue-950 font-bold text-3xl lg:pr-16">
                        Foris Labs <span class="text-orange-500">For Schools</span>
                    </h1>
                    <div class="flex items-center space-x-5 my-5">
                        <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                            <svg viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="w-4 h-4 text-blue-800">
                                <rect width="11.8182" height="11.8182" rx="2" fill="currentColor"></rect>
                                <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="currentColor"></rect>
                                <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="currentColor"></rect>
                                <rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2"
                                      class="fill-current text-orange-500"></rect>
                            </svg>
                        </div>
                        <p>Elevate your school's science education with Foris Labs, a cutting-edge virtual science
                            laboratory that revolutionizes learning.</p>
                    </div>
                    <div class="flex items-center space-x-5 my-5">
                        <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                            <svg viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                                <rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D"></rect>
                                <rect width="21.2245" height="21.2245" rx="2" fill="#F48C06"></rect>
                            </svg>
                        </div>
                        <p>Gain access to a diverse range of interactive, immersive experiments that empower students to
                            explore and comprehend scientific concepts with unprecedented depth.</p>
                    </div>
                    <div class="flex items-center space-x-5 my-5">
                        <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                            <svg viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                                <path
                                    d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z"
                                    fill="#2F327D"></path>
                            </svg>
                        </div>
                        <p>Join our thriving community of schools already benefiting from Foris Labs, and witness a
                            remarkable surge in student engagement and performance in the field of science.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="bg-orange-50">
        <div class="container mx-auto px-4 md:px-12 lg:px-16 py-8">
            <div
                class="bg-gradient-to-r from-orange-50 to-orange-100 border border-rose-300/30 overflow-hidden rounded-3xl items-center md:grid md:grid-cols-2 ">
                <img class="h-full" src="{{asset('img/team-smile.jpg?3f')}}" alt="dashboard image">
                <div class="mt-4 md:mt-0 p-6 sm:p-8 md:p-12">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900">
                        Experience Foris Labs in Action Now!</h2>
                    <p class="mb-6 text-gray-600 text-md md:text-lg">Are you ready to revolutionize your science
                        education or
                        take your institution's teaching to the next level? Witness firsthand how our virtual science
                        laboratory can transform the way you learn and teach science.
                    </p>
                    <a href="#"
                       class="inline-flex bg-orange-500 items-center justify-center text-white text-lg font-bold rounded-full py-3 px-6 hover:bg-orange-400">
                        <span> Book a Demo</span>
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
