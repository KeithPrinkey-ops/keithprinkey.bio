<!-- resources/views/skills/skills.blade.php -->
                        <x-guest-layout>
                            <div class="py-10 bg-black sm:py-12 lg:py-16">
                                <div class="px-12 pb-5 mx-auto max-w-screen-2xl md:px-16">
                                    <div class="mb-10 md:mb-16">
                                        <h2 class="mb-4 text-3xl font-bold text-left text-zinc-100 lg:text-5xl md:text-center md:mb-10">
                                            Skills & Expertise
                                        </h2>
                                        <p class="max-w-screen-md mx-auto text-left text-zinc-300 md:text-lg md:text-center">
                                            A comprehensive blend of technical mastery, creative problem-solving, and leadership excellence.
                                        </p>
                                    </div>
                                    <div class="grid gap-8 sm:grid-cols-1 lg:grid-cols-2 md:gap-12">
                                        <!-- Backend Development -->
                                        <div class="flex gap-4 md:gap-5 bg-gradient-to-br from-blue-400 via-purple-400 to-teal-400 rounded-2xl p-0.5">
                                            <div class="flex gap-4 p-5 bg-zinc-900 md:gap-5 bg-opacity-5 rounded-2xl w-full">
                                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white rounded-full md:w-14 md:h-14 bg-gradient-to-br from-blue-300 via-purple-300 to-teal-300">
                                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                                </div>
                                                <div class="flex-1">
                                                    <h3 class="mb-2 text-lg font-semibold text-white md:text-xl">Backend Development</h3>
                                                    <ul class="text-sm text-blue-50 space-y-1">
                                                        <li>Laravel (Jetstream, Wave, Fortify)</li>
                                                        <li>PHP 8+, MySQL & PostgreSQL</li>
                                                        <li>API Development & Integration</li>
                                                        <li>Livewire & Alpine.js</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Frontend Development -->
                                        <div class="flex gap-4 md:gap-5 bg-gradient-to-br from-pink-400 via-purple-400 to-blue-400 rounded-2xl p-0.5">
                                            <div class="flex gap-4 p-5 bg-zinc-900 md:gap-5 bg-opacity-5 rounded-2xl w-full">
                                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white rounded-full md:w-14 md:h-14 bg-gradient-to-br from-pink-300 via-purple-300 to-blue-300">
                                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                                </div>
                                                <div class="flex-1">
                                                    <h3 class="mb-2 text-lg font-semibold text-white md:text-xl">Frontend Development</h3>
                                                    <ul class="text-sm text-pink-50 space-y-1">
                                                        <li>TailwindCSS & Alpine.js</li>
                                                        <li>JavaScript & TypeScript</li>
                                                        <li>Blade & Filament UI</li>
                                                        <li>Responsive Design & Accessibility</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DevOps & Servers -->
                                        <div class="flex gap-4 md:gap-5 bg-gradient-to-br from-green-400 via-teal-400 to-cyan-400 rounded-2xl p-0.5">
                                            <div class="flex gap-4 p-5 bg-zinc-900 md:gap-5 bg-opacity-5 rounded-2xl w-full">
                                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white rounded-full md:w-14 md:h-14 bg-gradient-to-br from-green-300 via-teal-300 to-cyan-300">
                                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path></svg>
                                                </div>
                                                <div class="flex-1">
                                                    <h3 class="mb-2 text-lg font-semibold text-white md:text-xl">DevOps & Servers</h3>
                                                    <ul class="text-sm text-green-50 space-y-1">
                                                        <li>VPS Hosting (CloudPanel, Plesk)</li>
                                                        <li>Docker & Containerization</li>
                                                        <li>Nginx & Apache Configuration</li>
                                                        <li>CI/CD Pipelines (GitHub Actions)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Firewall & Security -->
                                        <div class="flex gap-4 md:gap-5 bg-gradient-to-br from-red-500 via-orange-400 to-yellow-400 rounded-2xl p-0.5">
                                            <div class="flex gap-4 p-5 bg-zinc-900 md:gap-5 bg-opacity-5 rounded-2xl w-full">
                                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white rounded-full md:w-14 md:h-14 bg-gradient-to-br from-red-300 via-orange-300 to-yellow-300">
                                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                                </div>
                                                <div class="flex-1">
                                                    <h3 class="mb-2 text-lg font-semibold text-white md:text-xl">Firewall & Security</h3>
                                                    <ul class="text-sm text-yellow-50 space-y-1">
                                                        <li>UFW & iptables Management</li>
                                                        <li>Fail2Ban Configuration</li>
                                                        <li>SSL/TLS & Let's Encrypt</li>
                                                        <li>Server Hardening Best Practices</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Terminal & Linux -->
                                        <div class="flex gap-4 md:gap-5 bg-gradient-to-br from-gray-100 via-gray-500 to-gray-600 rounded-2xl p-0.5">
                                            <div class="flex gap-4 p-5 bg-zinc-900 md:gap-5 bg-opacity-5 rounded-2xl w-full">
                                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white rounded-full md:w-14 md:h-14 bg-gradient-to-br from-gray-300 via-gray-400 to-gray-500">
                                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path></svg>
                                                </div>
                                                <div class="flex-1">
                                                    <h3 class="mb-2 text-lg font-semibold text-white md:text-xl">Terminal & Linux</h3>
                                                    <ul class="text-sm text-gray-50 space-y-1">
                                                        <li>Fluent in Bash & Zsh</li>
                                                        <li>System Performance Monitoring</li>
                                                        <li>Process & Memory Management</li>
                                                        <li>Automating Tasks with Cron Jobs</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Productivity & Tools -->
                                        <div class="flex gap-4 md:gap-5 bg-gradient-to-br from-yellow-400 via-amber-500 to-orange-400 rounded-2xl p-0.5">
                                            <div class="flex gap-4 p-5 bg-zinc-900 md:gap-5 bg-opacity-5 rounded-2xl w-full">
                                                <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white rounded-full md:w-14 md:h-14 bg-gradient-to-br from-yellow-300 via-amber-300 to-orange-300">
                                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                                </div>
                                                <div class="flex-1">
                                                    <h3 class="mb-2 text-lg font-semibold text-white md:text-xl">Productivity & Tools</h3>
                                                    <ul class="text-sm text-amber-50 space-y-1">
                                                        <li>PhpStorm, IntelliJ, JetBrains Rider</li>
                                                        <li>API Testing (Postman, Insomnia)</li>
                                                        <li>Flare (Error Tracking)</li>
                                                        <li>Git & GitHub Workflow</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-guest-layout>
