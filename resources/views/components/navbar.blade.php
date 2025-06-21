<div class="mx-auto bg-black relative w-full lg:px-24 flex flex-col md:flex-row md:items-center md:justify-between md:px-6 px-8 py-3 tails-selected-element" x-data="{ open: false }">
    <div class="text-white text-sm items-center flex flex-row justify-between lg:justify-start">
        <a href="/" class="lg:pr-8 text-lg font-semibold">Keith Prinkey</a>
        <button @click="open = !open" class="text-white focus:outline-none inline-flex items-center justify-center md:hidden p-2 translate-x-4">
            <svg class="w-6 h-6" :class="{ 'hidden': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
            <svg class="w-6 h-6 hidden" :class="{ 'hidden': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="items-center flex-col flex-grow hidden pl-8 md:flex md:flex-row md:justify-end md:pb-0">
        <a href="/skills" class="text-white text-sm py-2 hover:text-white/70 lg:px-4 md:px-3 px-2 ease-out duration-300 lg:ml-auto">Skills</a>
        <a href="/resume" class="text-white text-sm py-2 hover:text-white/70 lg:px-4 md:px-3 px-2 ease-out duration-300">Resume</a>
        <a href="/about" class="text-white text-sm py-2 hover:text-white/70 lg:px-4 md:px-3 px-2 ease-out duration-300">Learn about me</a>
        <a href="/tech-stack" class="text-white text-sm py-2 hover:text-white/70 lg:px-4 md:px-3 px-2 ease-out duration-300">Tech Stack</a>
        <a href="/blog" class="text-white text-sm py-2 hover:text-white/70 lg:px-4 md:px-3 px-2 ease-out duration-300">Blog</a>
        <div class="items-center inline-flex gap-2 lg:ml-auto md:mt-0 mt-5 list-none">
            <a href="/contact" class="items-center text-sm font-medium justify-center focus:outline-none text-black inline-flex bg-white border-2 border-white duration-200 focus-visible:outline-white focus-visible:ring-white hover:bg-transparent hover:border-white lg:w-auto px-4 py-1.5 rounded-full text-center hover:text-white w-full">Get Started</a>
        </div>
    </nav>
</div>
