<x-guest-layout>
    <section class="py-8 bg-black sm:py-10 md:py-12 lg:py-16 xl:py-20 tails-selected-element" data-tails-scripts="//unpkg.com/alpinejs">
        <div class="max-w-6xl px-8 mx-auto lg:px-16">
            <h2 class="mb-2 text-xl font-bold text-white md:text-3xl">FAQ</h2>
            <div class="relative flex flex-col mt-2 mt-8 lg:flex-row">
                <!-- Left side of FAQs -->
                <div class="relative w-full lg:w-1/2 lg:pr-12">
                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">How many years of experience do you have?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">I've been crafting digital experiences professionally for over 9 years, specializing in full-stack web development.</p>
                    </div>
                    <!-- Question 2 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">What programming languages and technologies do you specialize in?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">My expertise includes PHP, JavaScript, TypeScript, HTML5, CSS3, and C#. I'm proficient with Laravel (Wave, Jetstream, and Fortify), TailwindCSS, Alpine.js,</p>
                    </div>
                    <!-- Question 3 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">What notable projects teams have you worked on?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">I've developed several impactful projects, including: League Manager App – A comprehensive Laravel Jetstream-powered platform for managing sports leagues. World eSports LLC – A platform facilitating competitive gaming communities. Al-Anon Family Groups - Electronic Meeting Finder – A scalable web app helping users find virtual Al-Anon meetings globally. A-Mills HVAC – Company website designed to boost online presence and client interaction. Portfolio Website – Showcasing my professional projects, built with TailwindCSS and Laravel</p>
                    </div>
                    <!-- Question 4 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">Where did you learn your skills and proficiencies?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">I'm currently studying Software Development at the University of Phoenix with a 3.7GPA, but my practical skills were refined through real-world projects, self-teaching, and continuous professional practice.</p>
                    </div>
                    <!-- Question 5 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">What's something unique about your development style?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">I combine technical proficiency with user-centric design, ensuring that every project I create not only functions flawlessly but also provides an engaging user experience.</p>
                    </div>
                </div>
                <!-- Right side of FAQs -->
                <div class="relative w-full lg:w-1/2 lg:pl-12">
                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">Are you open to collaboration or freelance projects?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">Absolutely! I'm always eager to collaborate on innovative web applications, particularly in sports management, gaming, and SaaS solutions.</p>
                    </div>
                    <!-- Question 2 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">How can I reach you for business inquiries or collaborations?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can contact me via <a href="mailto:keith@keithprinkey.bio" class="">email</a> or connect with me on <a href="https://www.linkedin.com/in/keith-prinkey-it/" class="">LinkedIn</a>.</p>
                    </div>
                    <!-- Question 3 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">What's your approach to building websites and applications?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">I focus on clean, maintainable code, performance optimization, and intuitive user interfaces. My goal is always to bridge functionality with a polished, user-centered design.</p>
                    </div>
                    <!-- Question 4 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class=""> Do you have experience managing server environments?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">Yes! I'm experienced with managing VPS hosting environments, Docker containers, and platforms like Plesk and CloudPanel for seamless deployments.</p>
                    </div>
                    <!-- Question 5 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-zinc-100 cursor-pointer sm:text-xl hover:text-white">
                            <span class="">What’s a fun fact about you as a developer?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path>
                            </svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-zinc-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">I’m passionate about merging tech and gaming to create vibrant online communities—combining professional expertise with personal interests. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
