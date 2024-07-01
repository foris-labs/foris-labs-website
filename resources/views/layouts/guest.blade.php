<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <meta name="description" content="Foris Labs is a virtual 3d Laboratory designed to eliminate the -probem if">
    <meta name="keywords" content="foris labs laboratory 3d virtual offline">

    <!-- Website Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&family=Shantell+Sans:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.cdnfonts.com/css/dilo-world" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e380772bc3.js" crossorigin="anonymous"></script>




    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer data-domain="forislabs.com" src="https://analytics.codewithkyrian.com/js/script.js"></script>
    <style>

        /*@media (min-width: 1000px) and (max-width: 1280px) {*/
        /*    !* Your CSS rules for the specified range *!*/
        /*    .slant {*/
        /*        top: 0;*/
        /*        height: 400px;*/
        /*    }*/

        /*    .slant {*/
        /*        height: 500px;*/

        /*    }*/
        /*}*/
    </style>
</head>

<body x-data>
@include('layouts.guest.header')
<div class="text-ash-900 font-sans antialiased">
    {{ $slot }}

    @include('layouts.guest.footer')
</div>
<!-- Scripts -->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
    // Function to replace content based on screen size
    function replaceContent() {
        var ScreenSection = document.getElementById('experience');
        if (window.innerWidth <= 1000) {
            // Medium/small screen design
            ScreenSection.innerHTML = `
            <div class="relative px-4 py-8 ">
                <h2 class="text-white text-3xl font-bold mb-4 font-burbank text-center">Experience Foris Labs in Action</h2>

                <!-- Image with Blue Border and Padding -->
                <div class="mx-auto border-4 border-16A4E1 m-10">
                    <img src="{{ asset('img/redesign/team-smile.png') }}" alt="Stretched Image" class="w-full h-80 object-cover object-center" loading="lazy">
                </div>

                <!-- Text Content -->
                <div class="text-white max-w-4xl mx-auto text-center mt-4">
                    <p class="text-base mb-4 font-arlon">Are you ready to revolutionize science education or take your institution's teaching to the next level?</p>
                    <p class="text-base mb-4 font-arlon">Witness firsthand how our virtual science laboratory can transform the way you learn and teach science.</p>
                </div>

                <!-- Button for Booking a Demo -->
                <div class="text-center mt-4">
                    <a href="https://calendly.com/forislabs/product-demo" class="inline-block border-4 border-white text-white font-burbank text-xl py-2 px-4 hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                        Book a Demo
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

        `;
            } else {
                // Large screen design
                ScreenSection.innerHTML = `
                <div class="absolute flex justify-between opacity-65 left-0">
                    <img src="{{ asset('img/redesign/team-smile.png') }}" alt="Stretched Image" class="w-auto h-80 grayscale top-1/2">
                </div>
                <div class="absolute flex justify-between opacity-65 right-0">
                    <img src="{{ asset('img/redesign/team-smile.png') }}" alt="Stretched Image" class="w-auto h-80 grayscale top-1/2">
                </div>

                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-[60%] border-[6px] border-16A4E1">
                        <div class="relative">
                            <img src="{{ asset('img/redesign/team-smile.png') }}" alt="Overlay Image" class="w-full h-[400px] shadow-lg object-cover" >
                            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-black  opacity-400"></div>

                            <div class="absolute top-1/2 left-1/4 inset-0 transform -translate-x-1/2 -translate-y-1/2 text-white text-left" style="margin-left: 100px">
                                <h2 class="text-3xl font-bold mb-4 font-burbank">Experience Foris Labs in Action Now!</h2>
                                <p class="text-base mb-4 font-arlon">Are you ready to revolutionize science education or take your institution's teaching to the next level?.</p>
                                <p class="text-base mb-4 font-arlon">Witness firsthand how our virtual science laboratory can transform the way you learn and teach science.</p>
                                <a href="https://calendly.com/forislabs/product-demo" class="inline-block mt-4 border-[3px] border-white bg-transperent font-burbank text-white text-xl px-4 py-2 hover:bg-blue-700 focus:outline-none font-black">
                                    Book a Demo
                                    <i class='fas fa-arrow-right ml-2 text-[20px]'></i> <!-- Right arrow character -->
                                </a>
                            </div>
                        </div>
                    </div>
                `;
            }
        }

        // Event listener for window resize
        window.addEventListener('resize', replaceContent);

        // Initial check on page load
        window.addEventListener('load', replaceContent);
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const commentForm = document.getElementById('commentForm');
        const commentSection = document.getElementById('comments');

        if (!commentForm || !commentSection) {
            console.error('Comment form or comments section not found');
            return;
        }

        commentForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Serialize form data
            const formData = new FormData(commentForm);

            // Send AJAX request
            fetch(commentForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token header
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Clear form fields
                    commentForm.reset();

                    // Prepend the new comment to the comment section
                    const newCommentHtml = `
                        <div class="flex mb-4">
                            <img src="{{ asset('img/blog_images/user.png') }}" class="w-12 h-12 rounded" alt="User Image">
                            <div class="pl-4">
                                <h6 class="text-lg font-semibold"><a href="#" class="text-blue-500">${data.comment.name}</a> <span class="text-xs text-gray-500"><i>${moment(data.comment.created_at).fromNow()}</i></span></h6>
                                <p class="text-gray-700">${data.comment.content}</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    `;
                    commentSection.insertAdjacentHTML('afterbegin', newCommentHtml);

                    // Show success message
                    const successDiv = document.createElement('div');
                    successDiv.className = 'bg-d1e7dd px-4 py-3 m-4 rounded relative';
                    successDiv.setAttribute('role', 'alert');
                    successDiv.innerHTML = '<strong class="font-bold text-0f5132">Success!</strong><span class="block sm:inline"> Comment saved successfully.</span>';
                    commentForm.insertAdjacentElement('beforebegin', successDiv);

                    // Hide the success message after a few seconds
                    setTimeout(() => {
                        successDiv.remove();
                    }, 3000);
                } else {
                    // Handle error response
                    console.error('Failed to submit comment');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>


    </body>

    </html>
