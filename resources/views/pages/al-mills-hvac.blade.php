
<x-guest-layout>
    {{-- Page meta --}}
    @php
        $title = 'Laravel Lead Generation & Contact Form';
        $desc  = 'A custom Laravel website with a lead generation form, built using Livewire and Tailwind CSS, designed to capture user information and inquiries.';
        $canonical = url()->current();
        $og = asset('storage/images/al-anon/al-anon-custom-meeting-finder.png');
    @endphp

    @push('meta')
        <link rel="canonical" href="{{ $canonical }}">
        <meta name="description" content="{{ $desc }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $desc }}">
        <meta property="og:url" content="{{ $canonical }}">
        <meta property="og:image" content="{{ $og }}">
        <meta name="twitter:card" content="summary_large_image">
        <script type="application/ld+json">
            {
              "@context":"https://schema.org",
              "@type":"SoftwareApplication",
              "name":"A-Mills HVAC",
              "applicationCategory":"LeadGeneration",
              "operatingSystem":"Web",
              "url":"https://a-millshvac.com",
              "author":{"@type":"Person","name":"Keith Prinkey"},
              "description":"{{ $desc }}"
        }

        </script>
    @endpush>

    {{-- Hero --}}
    <section class="bg-slate-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl font-extrabold leading-tight">
                    A-Mills <span class="block text-indigo-400">HVAC</span>
                </h1>
                <p class="mt-6 text-slate-300 max-w-prose">
                    Built using Laravel and Laravel Livewire, this custom website is a fully-featured lead generation form and contact form.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="https://a-millshvac.com" target="_blank" class="rounded-2xl px-5 py-3 bg-indigo-500 hover:bg-indigo-400 font-medium">Visit A-Mills HVAC</a>
                    <a href="https://a-millshvac.com/consultation/request" class="rounded-2xl px-5 py-3 border border-white/20 hover:bg-white/10">Contact A-Mills</a>
                </div>
                <div class="mt-6 flex flex-wrap gap-2 text-xs">
                    @foreach ([
                        'Laravel',
                        'Laravel Livewire',
                        'TailwindCSS',
                        'Blade Components',
                        'MySQL',
                        'Consultation Form Integration',
                        'API Integrations',
                        'GitHub',
                        'Continuous Integration (CI)',
                        'Continuous Deployment (CD)',
                        'Server Optimization',
                        'Responsive Design'
                    ] as $chip)
                        <span class="px-3 py-1 rounded-full bg-white/10">{{ $chip }}</span>
                    @endforeach
                </div>
            </div>
            <div class="relative rounded-2xl overflow-hidden ring-1 ring-white/10 shadow-2xl">
                <img src="{{ asset('storage/images/a-mills/a-mills-homepage.png') }}" alt="A-Mills HVAC" class="w-full h-auto">
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-6 py-12">
        <h2 class="text-2xl font-bold text-gray-400 dark:text-white">Key Features</h2>
        <div class="mt-6 grid md:grid-cols=2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['Livewire Consultation Form','Built a real-time consultation form using Laravel Livewire, including input validation, submission handling, and dynamic confirmation messaging.'],
                ['TailwindCSS Design System','Implemented a modern responsive UI using TailwindCSS with reusable Blade component patterns for a consistent design across all pages.'],
                ['SEO-Friendly Laravel Routing','Configured clean, human-readable routes for service pages to improve search engine indexing and organic traffic.'],
                ['Custom Blade Components','Created reusable Blade components (e.g., call-to-action, services grid, testimonial box) to reduce duplication and improve maintainability.'],
                ['Performance Optimization','Optimized asset delivery (compiled with Vite), minimized queries, and implemented HTTP caching to improve page load times.'],
                ['Scalability & Extensibility','Structured the app so additional service categories or form fields can be added without refactoring core logic.'],
            ] as [$h,$p])
                <div class="rounded-2xl border border-gray-200 dark:border-gray-700 p-6 bg-white dark:bg-gray-800">
                    <h3 class="font-semibold text-gray-900 dark:text-white">{{ $h }}</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $p }}</p>
                </div>
            @endforeach
        </div>
    </section>



    <section class="mx-auto max-w-7xl px-6 py-12">
        {{-- Media --}}
        @php
            $shots = [
         ['a-mills-homepage.png', 'A-Mills HVAC Homepage'],
         ['a-mills-contact-page.png', 'A-Mills HVAC Contact Form'],
         ['a-mills-services.png', 'A-Mills HVAC Services Page'],
         ['a-mills-testimonials.png', 'A-Mills HVAC Testimonials Section'],
         ['a-mills-faq.png', 'A-Mills HVAC Responsive Design'],
         ['a-mills-about.png', 'A-Mills HVAC About Page'],
     ];
        @endphp

        <h2 class="text-2xl font-bold text-gray-400">Screenshots</h2>
        <x-screenshot-gallery :shots="$shots"
                              base="storage/images/a-mills"
                              :initial="6" />

    </section>


    {{-- Optional inline lead capture (swap in your Livewire contact when you want) --}}
    {{-- <livewire:contact-form /> --}}

    {{-- FAQ (Alpine) --}}
    <section class="mx-auto max-w-7xl px-6 py-10" x-data="{open:null}">
        <h2 class="text-2xl font-bold text-gray-400 dark:text-white">FAQ</h2>
        @php
            $faqs = [
                ['Can customers submit consultation requests online?','Yes — a real-time Livewire form allows users to submit consultation requests directly from the website with immediate confirmation.'],
                ['Is the site optimized for mobile users?','Absolutely — the entire layout was built using TailwindCSS, ensuring responsive behavior across all screen sizes.'],
                ['Can the consultation form be customized in the future?','Yes — additional fields and validation rules can be added easily without modifying the core components.'],
                ['How are submissions handled?','Form submissions are validated server-side and persisted via Eloquent, with optional email notifications to the admin.'],
                ['Does it support SEO and clean URLs?','Yes — routes were configured using Laravel’s built-in router to provide clean, SEO-friendly URLs for all service pages.'],
                ['Was it designed to be scalable?','Definitely — the use of Blade components and modular Livewire classes makes it easy to extend as new services get added.'],
            ];
        @endphp

        <div class="mt-6 space-y-3">
            @foreach ($faqs as $i => [$q,$a])
                <div class="border border-gray-200 dark:border-gray-700 rounded-xl p-4 bg-white dark:bg-gray-800">
                    <button class="w-full text-left font-medium flex justify-between text-gray-900 dark:text-white" @click="open = open === {{ $i }} ? null : {{ $i }}">
                        <span>{{ $q }}</span>
                        <span x-show="open !== {{ $i }}">＋</span><span x-show="open === {{ $i }}">－</span>
                    </button>
                    <div class="mt-2 text-gray-600 dark:text-gray-300" x-show="open === {{ $i }}" x-collapse>{{ $a }}</div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- CTA --}}
    <section class="mx-auto max-w-7xl px-6 py-16">
        <div class="rounded-2xl bg-gradient-to-r from-indigo-600 to-fuchsia-500 text-white p-8">
            <h2 class="text-2xl font-bold">Want this kind of development work?</h2>
            <p class="mt-2 text-white/90">I can tailor this meeting finder to your rules, branding, and workflow.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('contact-form') }}" class="rounded-2xl bg-white/10 hover:bg-white/20 px-5 py-3">Request a quote</a>
                <a href="https://meetings.al-anon.org/electronic-meeting-page/" class="rounded-2xl bg-white text-slate-900 px-5 py-3">Visit AL-ANON</a>
            </div>
        </div>
    </section>
</x-guest-layout>
