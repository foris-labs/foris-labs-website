<x-auth-layout title="Login">
<div class="flex h-screen flex-col md:flex-row">
   
        <!-- content for the right side-->
        <div class="w-1/2 bg-1E1E1E w-full h-full flex items-center justify-center">
            <!-- White Box -->
            <div class="bg-white p-8 rounded-lg shadow-lg text-black max-w-md w-full">
                <!-- Logo at the Top Center -->
                <div class="text-center mb-8">
                    <img src="{{ asset('img/logo-black.png') }}" alt="Your Logo" class="mx-auto h-16 w-auto">
                </div>

                <form class="w-full max-w-sm mx-auto" style="font-family:'Burbank Big Condensed Black';">
                    <div class="mb-6">
                        <div class="w-1/8 mx-auto">
                            <input type="text" name="username" placeholder="Username" class="text-2xl bg-gray-200 appearance-none border-2 border-gray-200  w-full py-2 px-6 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-16A4E1">
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="w-1/8 mx-auto">
                            <input type="password" name="password" placeholder="Password" class=" text-2xl bg-gray-200 appearance-none border-2 border-gray-200  w-full py-2 px-6 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-16A4E1">
                        </div>
                    </div>
                    <div class="mb-6 flex w-1/8">
                        <div class="w-full mx-auto">
                            <!-- Checkbox and Forgot Password Link -->
                            <div class="flex justify-between w-full text-xl">
                                <!-- Checkbox -->
                                <label class="text-gray-500 cursor-pointer item-left text-lg">
                                    <input type="checkbox" class="mr-2 leading-tight rounded">Stay Signed In
                                </label>
                                <!-- Forgot Password Link to the right -->
                                <div class="text-gray-500 item-right text-lg">
                                    <a href="#" class="">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="w-2/3 mx-auto">
                            <!-- Login Button -->
                            <button type="submit" class="bg-16A4E1 text-2xl text-white px-4 py-3 flex items-center justify-center w-full">
                                Login
                                <!-- Right arrow icon -->
                                <span class="ml-2">&#8594;</span>
                            </button>
                        </div>
                    </div>
                    
                    
                    
                    
                </form>

            </div>
        
    </div>

    <!-- Right Side with Background Color -->
    <div class="w-1/2 w-full"style="margin-left:-20px">
        <img src="{{ asset('img/redesign/login_image.png') }}" alt="Your Image" class="h-full md-h-1/2 object-cover"style="width:100%">
    </div>
    
</div>
</x-auth-layout>
