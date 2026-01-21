
<x-guest-layout>
    {{-- Page meta --}}
    @php
        $title = 'Custom Integrated AL-ANON Online Meeting Finder';
        $desc  = 'A custom TypeScript-based online meeting finder integrated into AL-ANON\'s WordPress site, replacing multiple plugins with a single solution.';
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
              "name":"AL-ANON",
              "applicationCategory":"MeetingFinder",
              "operatingSystem":"Web",
              "url":"https://meetings.al-anon.org/electronic-meeting-page/",
              "author":{"@type":"Person","name":"Keith Prinkey"},
              "description":"{{ $desc }}"
        }

        </script>
    @endpush>

    {{-- Hero --}}
    <section class="dark:bg-black bg-slate-200 dark:text-white">
        <div class="mx-auto max-w-7xl px-6 py-20 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl font-extrabold leading-tight">
                    AL-ANON <span class="block dark:text-gray-200 text-indigo-400">Online Meeting Finder</span>
                </h1>
                <p class="mt-6 dark:text-gray-200 max-w-prose">
                    Built with TypeScript, I had to integrate this GitHub repo into AL-ANON's WordPress website with over 30 plugins at the time of implementation. My work replaced almost 10 plugins that were attempting to achieve what I accomplished with one GitHub repo.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="https://al-anon.org" target="_blank" class="rounded-2xl px-5 py-3 bg-indigo-500 hover:bg-indigo-400 font-medium">Visit AL-ANON Meeting Finder</a>
                    <a href="https://meetings.al-anon.org/electronic-meeting-page/" class="rounded-2xl px-5 py-3 border dark:border-white/50 dark:hover:bg-indigo-200 hover:bg-indigo-200">Find a meeting</a>
                </div>
                <div class="mt-6 flex flex-wrap gap-2 text-xs dark:text-gray-800 dark:text-gray-200">
                    @foreach (['WordPress',
                               'PHP',
                               'TypeScript',
                               'Vite 6',
                               'MySQL',
                               'API Integrations',
                               'GitHub',
                               'Continuous Integration (CI)',
                               'Continuous Deployment (CD)',
                               'Custom Theme Development',
                               'Database Administration',
                               'Performance Optimization',
                      ] as $chip)
                        <span class="px-3 py-1 rounded-full bg-white/10 dark:bg-gray-200">{{ $chip }}</span>
                    @endforeach
                </div>
            </div>
            <div class="relative rounded-2xl overflow-hidden ring-1 ring-white/10 shadow-2xl">
                <img src="{{ asset('storage/images/al-anon/al-anon-custom-filters.png') }}" alt="Online Meeting Finder Custom Filters" class="w-full h-auto">
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-6 py-12">
        <h2 class="text-2xl font-bold text-gray-400 dark:text-white">Key Features</h2>
        <div class="mt-6 grid md:grid-cols=2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['TypeScript-based Online Meeting Finder','Integrated a custom GitHub-based TypeScript app into the existing WordPress frontend, with dynamic filtering/search against meeting JSON data pulled from the CMS.'],
                ['Plugin Reduction & Optimization','Replaced the functionality of 10 overlapping plugins by migrating to a single custom front-end component, improving performance and reducing maintenance overhead.'],
                ['WordPress REST API Integration','Leveraged WP REST API endpoints to pull meeting data into the TypeScript application while maintaining full compatibility with 30+ existing plugins.'],
                ['Custom Standalone Page Embed','Anchored the meeting finder on its own standalone page using HTML/shortcode and ensured full Elementor Pro compatibility.'],
                ['Role-Based Access', 'Implemented scoped access so regional admins can maintain meeting content without affecting other parts of the platform.'],
                ['Extensibility & Maintainability','Structured the integration to allow future enhancements (new regions, languages, formats) without core code changes.'],
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
         ['al-anon-custom-filters.png', 'Custom Meeting Filters'],
         ['al-anon-custom-meeting-finder.png', 'Custom Integrated Online Meeting Finder'],
     ];
        @endphp

        <h2 class="text-2xl font-bold text-gray-400">Screenshots</h2>
        <x-screenshot-gallery :shots="$shots"
                              base="storage/images/al-anon"
                              :initial="6" />

    </section>


    {{-- Optional inline lead capture (swap in your Livewire contact when you want) --}}
    {{-- <livewire:contact-form /> --}}

    {{-- FAQ (Alpine) --}}
    <section class="mx-auto max-w-7xl px-6 py-10" x-data="{open:null}">
        <h2 class="text-2xl font-bold text-gray-400 dark:text-white">FAQ</h2>
        @php
            $faqs = [
                ['Was the integration compatible with all existing plugins?','Yes — the TypeScript meeting finder was built to work alongside 30+ active WordPress plugins without any conflicts.'],
                ['Did it replace any existing functionality?','Absolutely — the new implementation allowed us to safely remove 10 redundant plugins, reducing bloat and improving performance.'],
                ['How is the meeting data loaded?','The frontend pulls data via the WordPress REST API and renders it dynamically in the TypeScript app, so the page never has to reload.'],
                ['Can non-technical admins maintain meetings?','Yes — meeting records are still managed through the WordPress dashboard using Custom Post Types and taxonomies.'],
                ['Is it embedded or an external app?','It’s fully embedded as a standalone page within WordPress using an HTML anchor/shortcode so it behaves like a native part of the site.'],
                ['Does it support search and filtering?','Yes — users can filter by region, meeting type, and date in real-time thanks to the dynamic TypeScript UI.'],
                ['Can it be extended for future needs?','Definitely — the integration was built modularly so additional regions or languages can be added with minimal changes.'],
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
                <a href="{{ route('leads.capture') }}" class="rounded-2xl bg-white/10 hover:bg-white/20 px-5 py-3">Request a quote</a>
                <a href="https://meetings.al-anon.org/electronic-meeting-page/" class="rounded-2xl bg-white text-slate-900 px-5 py-3">Visit AL-ANON</a>
            </div>
        </div>
    </section>
</x-guest-layout>
