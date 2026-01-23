<div id="cookie-consent" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
            <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl max-w-md mx-4">
                <h2 class="text-xl font-bold mb-4">Cookie Consent</h2>
                <p class="text-sm mb-4">
                    This website uses cookies to enhance your experience. By using this site, you agree to our
                    <a href="/terms" class="underline hover:text-blue-600">Terms and Conditions</a> and
                    <a href="/privacy" class="underline hover:text-blue-600">Privacy Policy</a>.
                </p>
                <div class="flex gap-3 justify-end">
                    <button id="cookie-decline" class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded">
                        Decline
                    </button>
                    <button id="cookie-accept" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                        Accept
                    </button>
                </div>
            </div>
        </div>

        <script>
            (function() {
                const banner = document.getElementById('cookie-consent');
                const acceptBtn = document.getElementById('cookie-accept');
                const declineBtn = document.getElementById('cookie-decline');
                const body = document.body;

                if (!localStorage.getItem('cookieConsent')) {
                    banner.classList.remove('hidden');
                    body.style.overflow = 'hidden'; // Prevent scrolling
                }

                acceptBtn?.addEventListener('click', () => {
                    localStorage.setItem('cookieConsent', 'accepted');
                    banner.classList.add('hidden');
                    body.style.overflow = '';
                });

                declineBtn?.addEventListener('click', () => {
                    localStorage.setItem('cookieConsent', 'declined');
                    banner.classList.add('hidden');
                    body.style.overflow = '';
                    // Disable non-essential cookies/tracking
                    disableNonEssentialCookies();
                });

                function disableNonEssentialCookies() {
                    // Disable analytics (e.g., Google Analytics)
                    window['ga-disable-UA-XXXXX-Y'] = true;
                    // Block Calendly tracking if possible
                    // Remove any non-essential scripts
                }
            })();
        </script>
