<x-guest-layout title="News Blog">
    <!-- Blog Start -->
    <div class="container mx-auto py-5">
        <div class="flex flex-wrap -mx-4">
            <!-- Blog list Start -->
            <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/blog_images/designer-fashion.jpg') }}" alt="Designer Fashion">
                        </div>
                        <div class="p-6 bg-EEF9FF">
                            <div class="flex items-center mb-3 text-sm text-gray-600">
                                <div class="flex items-center mr-3">
                                    <i class="far fa-user text-primary mr-1"></i>Moses I. Akpere
                                </div>
                                <div class="flex items-center">
                                    <i class="far fa-calendar-alt text-primary mr-1"></i>2022-10-04 18:36:57
                                </div>
                            </div>
                            <h4 class="text-xl font-semibold mb-3">Inauguration of Ultra Modern Hostel</h4>
                            <p class="text-gray-700">The Inauguration of the school ultra Modern Hostel was done by MR. Willie Obiano, The Executive Gove</p>
                            <a class="text-blue-600 hover:text-blue-800 font-semibold mt-3 inline-block" href="post.php?post_id=1">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/blog_images/designer-fashion.jpg') }}" alt="Designer Fashion">
                        </div>
                        <div class="p-6 bg-EEF9FF">
                            <div class="flex items-center mb-3 text-sm text-gray-600">
                                <div class="flex items-center mr-3">
                                    <i class="far fa-user text-primary mr-1"></i>Moses I. Akpere
                                </div>
                                <div class="flex items-center">
                                    <i class="far fa-calendar-alt text-primary mr-1"></i>2023-07-04 23:45:25
                                </div>
                            </div>
                            <h4 class="text-xl font-semibold mb-3">Admission for 2023/2024 Session</h4>
                            <p class="text-gray-700">Sale of forms for 2023/2024 Academic Session into *JS1, JS2 & SS1 (NTC1)* is ongoing at Archbisho</p>
                            <a class="text-blue-600 hover:text-blue-800 font-semibold mt-3 inline-block" href="post.php?post_id=2">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('img/blog_images/designer-fashion.jpg') }}" alt="Designer Fashion">
                        </div>
                        <div class="p-6 bg-EEF9FF">
                            <div class="flex items-center mb-3 text-sm text-gray-600">
                                <div class="flex items-center mr-3">
                                    <i class="far fa-user text-primary mr-1"></i>Moses I. Akpere
                                </div>
                                <div class="flex items-center">
                                    <i class="far fa-calendar-alt text-primary mr-1"></i>2023-07-04 23:45:25
                                </div>
                            </div>
                            <h4 class="text-xl font-semibold mb-3">Award Ceremony</h4>
                            <p class="text-gray-700">Archbishop Heerey Technical College received the NATIONAL Second Position at the 2023 Mike Okonkwo Annual Essay Competition.</p>
                            <a class="text-blue-600 hover:text-blue-800 font-semibold mt-3 inline-block" href="post.php?post_id=3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->
            
             <!-- Sidebar Start -->
             <div class="w-full lg:w-1/3 px-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="flex">
                        <input type="text" class="flex-grow p-3 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Keyword">
                        <button class="cursor-pointer bg-blue-500 text-white px-4 rounded-r-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-arrow-right ml-2 text-[15px]"></i>
                        </button>
                    </div>
                </div>
                <!-- Search Form End -->
        
                
                <!-- Recent Post Start -->
                <div class="mb-5">
                    <div class="border-b-2 border-gray-300 pb-3 mb-4">
                        <h3 class="text-lg font-semibold">Recent Post</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex rounded overflow-hidden bg-white shadow-md">
                            <img class="w-24 h-24 object-cover" src="{{ asset('img/blog_images/designer-fashion.jpg') }}" alt="">
                            <a href="post.php?post_id=16" class="flex-grow p-3 flex items-center text-sm font-semibold text-gray-800">Admission For 2024/2025 Academic Session</a>
                        </div>
                    
                    </div>
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
</x-guest-layout>
