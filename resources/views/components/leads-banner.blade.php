@props(['message' => 'Looking for a web developer? I\'m available for new projects!', 'style' => 'info'])

<section
    x-data="{ show: sessionStorage.getItem('bannerClosed') !== 'true' }"
    x-show="show"
    x-transition
    id="contact-banner"
    class="overflow-hidden relative px-6 bg-gradient-to-tr from-blue-600 to-indigo-600 md:px-8"
    style="display: none;">
    <div class="flex relative flex-wrap py-2 mx-auto max-w-7xl md:py-1 sm:pr-5 md:pr-0 sm:flex-nowrap sm:justify-center sm:items-center">
        <div class="inline-flex order-1 items-center mb-1 w-11/12 max-w-screen-sm text-sm text-white sm:order-none sm:w-auto md:text-base sm:mb-0">
            <span class="hidden mr-2 text-2xl md:block">👨‍💻</span> {{ $message }}
        </div>

        <a href="{{ route('leads.capture') }}" @click="show = false; sessionStorage.setItem('bannerClosed', 'true')" class="inline-block order-last px-3 py-2 w-full text-sm font-semibold text-center text-indigo-600 whitespace-nowrap bg-indigo-50 rounded-md ring-indigo-300 transition duration-100 outline-none sm:py-1 sm:order-none sm:w-auto sm:ml-4 hover:bg-white active:bg-white focus-visible:ring">
            Contact me
        </a>

        <div class="flex order-2 justify-end items-start w-1/12 sm:order-none sm:w-auto sm:absolute sm:right-0 sm:-mr-1 xl:mr-3">
            <button
                type="button"
                @click="show = false; sessionStorage.setItem('bannerClosed', 'true')"
                class="text-indigo-100 transition duration-100 hover:text-white active:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>
</section>
