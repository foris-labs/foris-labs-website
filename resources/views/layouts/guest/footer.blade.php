<footer class="bg-ash-900 text-ash-300">
  <div class="flex flex-col items-center justify-between px-5 py-4 md:flex-row">
    <div class="my-2">
      All Right Reserved © 2021 | Foris Labs
    </div>
    <ul class="my-2 flex flex-wrap justify-center text-xs uppercase md:text-sm">
      <li class="px-2"><a href="{{ route('contact-us') }}">Contact</a></li>
      <li class="px-2"><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
      <li class="px-2"><a href="{{ route('terms') }}">Terms of Use</a></li>
    </ul>
  </div>
</footer>
<section x-cloak x-data="{ hidden: true }" @scroll.window="hidden=true" class="" @click.away="hidden = true">
  <div
    class="fixed inset-y-0 left-0 flex h-screen w-[50px] flex-col items-center justify-center transition-transform duration-500"
    :class="{ 'translate-x-[-50px]': hidden, 'translate-x-0': !hidden }">
    <a
      class="bg-ash-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
        class="main-grid-item-icon" fill="none">
        <path
          d="m17.543 13.398.661-4.31h-4.136V6.29c0-1.18.578-2.329 2.43-2.329h1.88V.291S16.673 0 15.042 0c-3.407 0-5.633 2.064-5.633 5.802v3.285H5.622v4.311h3.786v10.42a15.015 15.015 0 0 0 4.66 0v-10.42h3.475Z"
          fill="currentColor" />
      </svg>
    </a>
    <a
      class="bg-ash-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none">
        <path d="M7.548 21.501c9.056 0 14.01-7.503 14.01-14.01 0-.213 0-.425-.015-.636A10.02 10.02 0 0 0 24 4.305a9.815 9.815 0 0 1-2.828.775 4.94 4.94 0 0 0 2.165-2.723 9.865 9.865 0 0 1-3.127 1.195 4.929 4.929 0 0 0-8.391 4.491A13.98 13.98 0 0 1 1.67 2.898a4.928 4.928 0 0 0 1.525 6.573A4.88 4.88 0 0 1 .96 8.855v.063a4.926 4.926 0 0 0 3.95 4.826 4.914 4.914 0 0 1-2.223.085 4.93 4.93 0 0 0 4.6 3.42A9.88 9.88 0 0 1 0 19.288a13.941 13.941 0 0 0 7.548 2.208" fill="currentColor" />
      </svg>
      </i></a>
    <a
      class="bg-ash-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white">
      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none">
        <path d="M5.372 24H.396V7.976h4.976V24ZM2.882 5.79C1.29 5.79 0 4.474 0 2.883a2.882 2.882 0 1 1 5.763 0c0 1.59-1.29 2.909-2.881 2.909ZM23.995 24H19.03v-7.8c0-1.86-.038-4.243-2.587-4.243-2.587 0-2.984 2.02-2.984 4.109V24H8.49V7.976h4.772v2.186h.07c.664-1.259 2.287-2.587 4.708-2.587 5.035 0 5.961 3.316 5.961 7.623V24h-.005Z" fill="currentColor" />
      </svg>
      </a>
    <a
      class="bg-ash-800 my-1 flex h-8 w-8 items-center justify-center rounded-full text-white transition duration-500 hover:rotate-[360deg] hover:transform hover:bg-orange-500 hover:text-white"><!-- https://feathericons.dev/?search=mail&iconset=feather -->
      <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
        <polyline points="22,6 12,13 2,6" />
      </svg>
      </i></a>
  </div>
  <div
    class="fixed inset-y-0 left-0 z-10 flex h-screen w-[50px] flex-col items-start justify-center transition-transform duration-500"
    :class="{ 'translate-x-[-50px]': !hidden, 'translate-x-0': hidden }">
    <button @click="hidden = !hidden"
      class="bg-ash-800/50 my-1 flex h-8 w-6 items-center justify-start rounded-r-full text-white transition duration-500 hover:bg-orange-500 hover:text-white">
      <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
          stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </button>
  </div>
</section>
