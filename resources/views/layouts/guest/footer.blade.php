<footer class="bg-orange-50 border border-gray-200">
    <div class="container mx-auto px-4 py-6 lg:py-8">
        <div class="grid gap-12 grid-cols-2 lg:grid-cols-6 lg:gap-18">
            <div class="col-span-2">
                <a href="{{ route('home') }}" class="flex flex-shrink-0 mb-2 items-center">
                    <img class="block h-12 w-auto transition-all duration-300" src="{{ asset('img/logo-black.png') }}"
                         alt="Foris Labs">
                </a>
                <p class="text-gray-600">Foris Labs empowers students with superpowers to turn any
                    space into a science lab using our gamified 3D virtual science lab for realistic hands-on
                    experiments.</p>
            </div>
            <div>
                <h2 class="font-heading mb-6 text-sm font-bold text-blue-950 uppercase">Resources</h2>
                <ul class="text-gray-500 font-medium">
                    <li class="mb-2">
                        <a href="#" class="hover:underline">News</a>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}" class="hover:underline">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="font-heading mb-6 text-sm font-bold text-blue-950 uppercase">Legal</h2>
                <ul class="text-gray-500 font-medium">
                    <li class="mb-2">
                        <a href="{{ route('privacy-policy') }}" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-2">
                <h2 class="font-heading mb-6 text-sm font-bold text-blue-950 uppercase">In the News</h2>
                <div class="flex gap-4 flex-wrap">
                    <a href="https://punchng.com/science-startup-developed-by-anambra-students-emerges-finalist-at-global-competition/">
                        <img src="{{ asset('img/brands/punch.svg') }}" alt="punch" class="h-9">
                    </a>
                    <a href="https://theparadise.ng/onitsha-based-startup-foris-labs-selected-for-battlefield-200-competition-in-usa/">
                        <img src="{{ asset('img/brands/paradise.png') }}" alt="paradise" class="h-9">
                    </a>
                    <a href="https://www.thisdaylive.com/index.php/2022/11/25/zenith-tech-fair-ends-on-high-as-hackathon-finalists-are-rewarded-with-n53m">
                        <img src="{{ asset('img/brands/this-day-live-logo.png') }}" alt="this-day-live" class="h-9">
                    </a>
                    <a href="https://ng.opera.news/ng/en/education/64f23de2e92d37a457aace813674cdb2">
                        <img src="{{ asset('img/brands/opera-news.png') }}" alt="opera-news" class="h-9">
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>
        <div class="sm:flex sm:items-center sm:justify-between">

          <span class="text-sm text-gray-500 sm:text-center">
              © 2023 <a href="https://forislabs.com/" class="hover:underline">Foris Labs™</a>. All Rights Reserved.
          </span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                <a href="https://web.facebook.com/profile.php?id=100067094550865" target="_blank"
                   class="text-gray-500 hover:text-gray-900">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                              d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="https://twitter.com/forislabs?lang=en" class="text-gray-500 hover:text-gray-900">
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="w-4 h-4" fill="currentColor">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                    </svg>
                    <span class="sr-only">Twitter Page</span>
                </a>
                <a href="https://linkedin.com/company/foris-labs/" class="text-gray-500 hover:text-gray-900">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path
                            d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                    </svg>
                    <span class="sr-only">LinkedIn page</span>
                </a>
                <a href="mailto:forislabs@gmail.com" class="text-gray-500 hover:text-gray-900">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                    </svg>
                    <span class="sr-only">Email account</span>
                </a>
            </div>
        </div>
    </div>
</footer>

<section x-cloak x-data="{ hidden: true }" @scroll.window="hidden=true" class="" @click.away="hidden = true">
    <div
        class="fixed inset-y-0 left-0 flex h-screen w-[50px] flex-col items-center justify-center transition-transform duration-500"
        :class="{ 'translate-x-[-50px]': hidden, 'translate-x-0': !hidden }">
        <a href="https://web.facebook.com/profile.php?id=100067094550865" target="_blank"
           class="bg-gray-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                 fill="none">
                <path
                    d="m17.543 13.398.661-4.31h-4.136V6.29c0-1.18.578-2.329 2.43-2.329h1.88V.291S16.673 0 15.042 0c-3.407 0-5.633 2.064-5.633 5.802v3.285H5.622v4.311h3.786v10.42a15.015 15.015 0 0 0 4.66 0v-10.42h3.475Z"
                    fill="currentColor"/>
            </svg>
        </a>
        <a href="https://twitter.com/forislabs?lang=en" target="_blank"
           class="bg-gray-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="w-4 h-4" fill="currentColor">
                <path
                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
            </svg>
        </a>
        <a href="https://linkedin.com/company/foris-labs/" target="_blank"
           class="bg-gray-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                 fill="none">
                <path
                    d="M5.372 24H.396V7.976h4.976V24ZM2.882 5.79C1.29 5.79 0 4.474 0 2.883a2.882 2.882 0 1 1 5.763 0c0 1.59-1.29 2.909-2.881 2.909ZM23.995 24H19.03v-7.8c0-1.86-.038-4.243-2.587-4.243-2.587 0-2.984 2.02-2.984 4.109V24H8.49V7.976h4.772v2.186h.07c.664-1.259 2.287-2.587 4.708-2.587 5.035 0 5.961 3.316 5.961 7.623V24h-.005Z"
                    fill="currentColor"/>
            </svg>
        </a>
        <a href="mailto:forislabs@gmail.com"
           class="bg-gray-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                 fill="none" stroke="currentColor" stroke-linecap="round"
                 stroke-linejoin="round" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>
        </a>
    </div>
    <div
        class="fixed inset-y-0 left-0 z-10 flex h-screen w-[50px] flex-col items-start justify-center transition-transform duration-500"
        :class="{ 'translate-x-[-50px]': !hidden, 'translate-x-0': hidden }">
        <button @click="hidden = !hidden"
                class="bg-gray-800/50 my-1 flex h-8 w-6 items-center justify-start rounded-r-full text-white transition duration-500 hover:bg-orange-500 hover:text-white">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
</section>
