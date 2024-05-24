<x-guest-layout title="News Blog">
    <section class="relative bg-06A3DA">
        <div class="absolute z-1 w-full bg-center text-ash-600 bg-cover h-full flex items-center" style="background-image: url('/img/bg-pattern.png');">
        </div>
        <div class="w-full relative z-[2] text-ash-600 min-h-[250px] pt-24 pb-8 ">
            <div class="container max-w-7xl mx-auto flex px-4 md:px-16 py-12 flex-col items-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-burbank2 text-ash-800">News and Events</h1>
                <p class="leading-relaxed">
                    <a href="{{ route('home') }}" class="text-white font-arlon pr-2">Home</a>
                    <i class="fa text-xs fa-chevron-right pr-2"></i>
                    Blog
                </p>
            </div>
        </div>
    </section>
    <!-- Blog Start -->
    <div class="container mx-auto py-5">
        <div class="flex flex-wrap -mx-4">
            <!-- Blog list Start -->
            <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                @if($posts->isEmpty())
                    <p class="text-center text-gray-600 font-arlon">No posts available at the moment. Please check back later.</p>
                @else
                    <div class="grid gap-8 grid-cols-1 md:grid-cols-2">
                        @foreach($posts as $post)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="relative">
                                    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $post->image_url) }}" alt="{{ $post->title }}">
                                </div>
                                <div class="p-6 bg-EEF9FF">
                                    <div class="flex items-center mb-3 text-sm text-gray-600">
                                        <div class="flex items-center mr-3 font-arlon">
                                            <i class="far fa-user text-primary mr-1"></i>{{ $post->user->name }}
                                        </div>
                                        <div class="flex items-center font-arlon">
                                            <i class="far fa-calendar-alt text-primary mr-1"></i>{{ $post->created_at->format('l, jS F, Y') }}
                                        </div>
                                    </div>
                                    <h4 class="text-xl font-semibold mb-3 font-burbank2">{{ $post->title }}</h4>
                                    <p class="text-gray-700 font-arlon">{{ Str::limit($post->body, 100) }}</p>
                                    <a class="text-blue-600 hover:text-blue-800 font-semibold mt-3 inline-block" href="{{ route('blog.show', $post->slug) }}">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
            <!-- Blog list End -->

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
                <div class="mb-5 font-aarlon">
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
    </div>
    <!-- Blog End -->
</x-guest-layout>
