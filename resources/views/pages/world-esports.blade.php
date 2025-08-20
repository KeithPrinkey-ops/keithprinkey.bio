
<x-guest-layout>
    {{-- Page meta --}}
    @php
        $title = 'World eSports — League & Tournament Platform';
        $desc  = 'Laravel-powered league & tournament ops: teams, schedules, stats, disputes, RBAC, and integrations.';
        $canonical = url()->current();
        $og = asset('storage/images/world-esports/wes_homepage_1.png');
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
              "name":"World eSports",
              "applicationCategory":"GameApplication",
              "operatingSystem":"Web",
              "url":"https://worldesports.app",
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
                    World eSports <span class="block text-indigo-400">League & Tournament Platform</span>
                </h1>
                <p class="mt-6 text-slate-300 max-w-prose">
                    Built with Laravel, Jetstream, Livewire, and TailwindCSS, World eSports powers
                    end-to-end competition management—teams, players, scheduling, standings, stats,
                    disputes, and RBAC—plus resilient third-party integrations.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="https://worldesports.app" target="_blank" class="rounded-2xl px-5 py-3 bg-indigo-500 hover:bg-indigo-400 font-medium">Visit worldesports.app</a>
                    <a href="{{ route('contact-form') }}" class="rounded-2xl px-5 py-3 border border-white/20 hover:bg-white/10">Book a demo</a>
                </div>
                <div class="mt-6 flex flex-wrap gap-2 text-xs">
                    @foreach (['Laravel 12',
                               'Livewire 3',
                               'Jetstream',
                               'Sanctum',
                               'Spatie Permissions',
                               'TailwindCSS',
                               'Alpine.js',
                               'Vite 6',
                               'MySQL',
                               'Filament Admin',
                               'Custom Filament Widgets',
                               'API Integrations',
                               'Discord OAuth',
                               'Google OAuth',
                               'SMPT Email',
                      ] as $chip)
                        <span class="px-3 py-1 rounded-full bg-white/10">{{ $chip }}</span>
                    @endforeach
                </div>
            </div>
            <div class="relative rounded-2xl overflow-hidden ring-1 ring-white/10 shadow-2xl">
                <img src="{{ asset('storage/images/world-esports/wes_club_dashboard.png') }}" alt="World eSports dashboard" class="w-full h-auto">
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-6 py-12">
        <h2 class="text-2xl font-bold text-gray-400 dark:text-white">Key Features</h2>
        <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['Multi-Tenancy','Support multiple leagues with isolated data.'],
                ['Team & Player Management','Profiles, roles, eligibility, and transfer rules.'],
                ['League & Tournament Engine','Swiss, round-robin, knockout; tie-breakers.'],
                ['Dispute Resolution Workflow','Player proofs, staff review, role-gated actions.'],
                ['Responsive Design','TailwindCSS for a mobile-friendly, accessible experience.'],
                ['Automatic Backups','Database & file backups with retention policies.'],
                ['Audit Logs','Track critical actions for accountability.'],
                ['Scheduling & Check-ins','Auto-scheduling, TZ-aware, reminders, no-shows.'],
                ['Match Reporting & Proofs','Scores, media uploads, audits, disputes.'],
                ['Stats & Leaderboards','Player/team analytics; season & lifetime.'],
                ['Anti-Abuse & Fair Play','Duplicate detection, cooldowns, moderation.'],
                ['Roles & Permissions','Spatie-powered, customizable roles & abilities.'],
                ['2FA & Security','Laravel Sanctum, API tokens, best practices.'],
                ['Third-Party Integrations','Email (SendMail, SMTP, IMAP & POP3), OAuth (Google, Discord), game APIs.'],
                ['Custom Drafting & Rosters','Flexible roster sizes, custom positions, auto-drafting.'],
                ['Email Notifications','Configurable email alerts for key events.'],
                ['Discord Notifications','Optional Discord webhooks for real-time updates.'],
                ['API Access','RESTful API for integration with other services.'],
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
         ['sending_email_with_api.png',         'Email API integration / notifications'],
         ['wes_2-factor-auth.png',              'Two-factor authentication (TOTP / recovery codes)'],
         ['wes_API_match_fetch.png',            'Fetch club matches via EA API'],
         ['wes_club_dashboard.png',             'Club dashboard (stats, roster, recent games)'],
         ['wes_club_roster_control.png',        'Roster actions (trades, send-down, IR, release)'],
          ['wes_login_auth.png',                 'Login screen (Google / Discord / credentials)'],
         ['wes_league_registration.png',        'League registration form'],
         ['wes_filament_clubs.png',             'Clubs management in Filament'],
         ['wes_homepage_1.png',                 'Landing page (hero / entry point)'],
         ['wes_homepage_2.png',                 'Landing page – secondary state'],
         ['wes_player_dashboard.png',           'Player dashboard with verified stats'],
         ['wes_player_list.png',                'Paginated player list'],
          ['wes_filament_3.png',                 'Roles configuration'],
         ['wes_filament_4.png',                 'User listing'],
         ['wes_filament_5.png',                 'Match schedule admin'],
          ['wes_filament_2.png',                 'Permissions (Spatie) in Filament'],
         ['wes_filament_6.png',                 'System overview'],
         ['wes_public_club_index.png',          'Public club index'],
         ['wes_public_player_profile.png',      'Public player profile'],
         ['wes_role_assignment.png',            'Assign/Remove roles from players'],
         ['wes_second_user_profile_page.png',   'User profile (second state)'],
         ['wes_user_account_menu.png',          'User account menu'],
         ['wes_user_api_token_page.png',        'API token page with ability scopes'],
         ['wes_user_profile_page.png',          'User profile (avatar, email, phone)'],
         ['wes_auth_registration.png',          'OAuth/registration screen'],
     ];
        @endphp

        <h2 class="text-2xl font-bold text-gray-400">Screenshots</h2>
        <x-screenshot-gallery :shots="$shots"
                              base="storage/images/world-esports"
                              :initial="6" />

    </section>


    {{-- Optional inline lead capture (swap in your Livewire contact when you want) --}}
    {{-- <livewire:contact-form /> --}}

    {{-- FAQ (Alpine) --}}
    <section class="mx-auto max-w-7xl px-6 py-10" x-data="{open:null}">
        <h2 class="text-2xl font-bold text-gray-400 dark:text-white">FAQ</h2>
        @php $faqs = [
            ['Can it power seasonal leagues and weekend cups?','Yes—supports recurring seasons and one-offs with multiple formats.'],
            ['Is there an admin workflow for disputes?','Players submit proofs; staff review with role-gated actions and audit trails.'],
            ['Do you integrate game data?','Where possible—parsers/webhooks enrich stats and reduce manual input.'],
            ['Can I customize roles and permissions?','Yes, with Spatie Permissions you can create roles and fine-tune abilities.'],
            ['Is it mobile-friendly?','Absolutely—built with TailwindCSS for a responsive, accessible experience.'],
            ['What about security?','Uses Laravel Sanctum for API tokens, 2FA, and best practices to protect user data.'],
            ['Can I brand it for my league?','Yes, I can customize the UI to match your branding and workflow.'],
            ['What third-party services does it use?','Supports email (Postmark, Mailgun), OAuth (Google, Discord), and game APIs.'],
            ['Is there a demo I can try?','Yes, visit worldesports.app to explore the platform and request a demo.'],
        ]; @endphp
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
            <h2 class="text-2xl font-bold">Want this for your league?</h2>
            <p class="mt-2 text-white/90">I can tailor World eSports to your rules, branding, and workflow.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('contact-form') }}" class="rounded-2xl bg-white/10 hover:bg-white/20 px-5 py-3">Request a quote</a>
                <a href="https://worldesports.app" class="rounded-2xl bg-white text-slate-900 px-5 py-3">Visit worldesports.app</a>
            </div>
        </div>
    </section>
</x-guest-layout>
