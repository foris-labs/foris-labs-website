<x-guest-layout title="News Blog">
    <section class="relative bg-06A3DA">
        <div class="absolute z-1 w-full bg-center text-ash-600 bg-cover h-full flex items-center" style="background-image: url('/img/bg-pattern.png');">
        </div>
        <div class="w-full relative z-[2] text-ash-600 min-h-[250px] pt-24 pb-8 ">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-ash-800">News and Events</h1>
                <p class="leading-relaxed">
                    <a href="{{ route('home') }}" class="text-orange-500 pr-2">Home</a>
                    <i class="fa text-xs fa-chevron-right pr-2"></i>
                    Blog
                </p>
            </div>
        </div>
    </section>
          <!-- Blog Detail Start -->
    <div class="container mx-auto py-5">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                <img class="w-full  mb-5" src="{{ asset('storage/'.$post->image_url) }}" alt="">
                <h1 class="text-3xl font-bold mb-4 font-burbank2">{{$post->title}}</h1>
                <p class="text-gray-700 mb-8 font-arlon">
                    {{$post->body}}
                </p>
                <!-- Add more content here -->

                <!-- Comment Section -->
                
                <div class="mb-5">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">{{ $comments->count() }} Comments</h3>
                    </div>
                    <div id="comments">
                        @if ($comments->isEmpty())
                            <p class="text-gray-600 font-arlon">No comments yet!</p>
                            @else 
                            @foreach($comments as $comment)
                                @include('partials.comments', ['comment' => $comment])
                            @endforeach
                        @endif
                    </div>
                </div>    
        
                
                 
                 
                 
                <!-- Comment message -->
                <div class="bg-EEF9FF rounded p-5 mb-8">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                <div class="bg-fc0335 px-4 py-3 m-4 rounded relative" role="alert">
                                    <strong class="font-bold text-white">{{$error}}</strong>
                                   
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </span>
                                </div>
                                @endforeach
                            @endif

                            @if(session('success'))
                                <div class="bg-d1e7dd px-4 py-3 m-4 rounded relative" role="alert">
                                    <strong class="font-bold text-0f5132">{{session('success')}}</strong>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </span>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="bg-fc0335 px-4 py-3 m-4 rounded relative" role="alert">
                                    <strong class="font-bold text-white">{{session('error')}}</strong>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </span>
                                </div>
                            @endif
                            
                        
                        <h3 class="mb-0">Leave A Comment</h3>
                    </div>
                     <!-- Comment Form -->
                    <form id="commentForm" action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" class="form-control bg-white border-0 p-3 rounded-md" placeholder="Your Name*" name="name" id="cname" required>
                            <input type="email" class="form-control bg-white border-0 p-3 rounded-md" placeholder="Your Email*" name="email" id="email" required>
                            <textarea class="form-control bg-white border-0 p-3 rounded-md col-span-2" rows="5" placeholder="Comment*" name="comment" id="comment" required></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}"> <!-- Add hidden input for post_id -->
                        </div>
                        
                        <button class="p-5 bg-06A3DA hover:bg-EEF9FF w-full mt-4" type="submit" name="submit">Leave Your Comment</button>
                    </form>
                </div>
            </div>
            <!-- Blog Detail End -->
            

            <!-- Sidebar Start -->
            <div class="w-full lg:w-1/3 px-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="flex">
                        <input type="text" class="flex-grow p-3 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Keyword">
                        <button class="cursor-pointer bg-blue-500 text-white px-4 rounded-r-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-search  text-[15px]"></i>
                        </button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Recent Post Start -->
                <div class="mb-5 font-arlon">
                    <div class="border-b-2 border-gray-300 pb-3 mb-4">
                        <h3 class="text-lg font-semibold">Recent Post</h3>
                    </div>
                    <div class="space-y-3">
                        @if($older->isEmpty())
                        <p class="text-center text-gray-600">No recent posts available.</p>
                    @else
                        @foreach($older as $olderPost)
                            <div class="flex rounded overflow-hidden bg-white shadow-md">
                                <img class="w-24 h-24 object-cover" src="{{ asset('storage/' . $olderPost->image_url) }}" alt="{{ $olderPost->title }}">
                                <a href="{{ route('blog.show', $olderPost->slug) }}" class="flex-grow p-3 flex items-center text-sm font-burbank2 text-gray-800 hover:text-06A3DA">{{ $olderPost->title }}</a>
                            </div>
                        @endforeach
                    @endif
                    
                    </div>
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    
    <!-- Blog End -->
    </div>
    
</x-guest-layout>