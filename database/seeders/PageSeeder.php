<?php

                            namespace Database\Seeders;

                            use App\Models\Page;
                            use Illuminate\Database\Seeder;
                            use Illuminate\Support\Facades\DB;

                            class PageSeeder extends Seeder
                            {
                                /**
                                 * Run the database seeds.
                                 */
                                public function run(): void
                                {
                                    // Clear the table to avoid duplicates on re-seed
                                    DB::table('pages')->delete();

                                    Page::create([
                                        'name' => 'World eSports',
                                        'subtitle' => 'League & Tournament Platform',
                                        'summary' => 'Built with Laravel, Jetstream, Livewire, and TailwindCSS, World eSports powers end-to-end competition management—teams, players, scheduling, standings, stats, disputes, and RBAC—plus resilient third-party integrations.',
                                        'meta_description' => 'Laravel-powered league & tournament ops: teams, schedules, stats, disputes, RBAC, and integrations.',
                                        'og_image_path' => 'storage/images/world-esports/wes_homepage_1.png',
                                        'route_name' => 'world-esports',
                                        'external_url' => 'https://worldesports.app',
                                        'tech_stack' => [
                                            'Laravel 12', 'Livewire 3', 'Jetstream', 'Sanctum', 'Spatie Permissions',
                                            'TailwindCSS', 'Alpine.js', 'Vite 6', 'MySQL', 'Filament Admin',
                                            'Custom Filament Widgets', 'API Integrations', 'Discord OAuth', 'Google OAuth', 'SMPT Email'
                                        ],
                                        'features' => [
                                            ['title' => 'Multi-Tenancy', 'description' => 'Support multiple leagues with isolated data.'],
                                            ['title' => 'Team & Player Management', 'description' => 'Profiles, roles, eligibility, and transfer rules.'],
                                            ['title' => 'League & Tournament Engine', 'description' => 'Swiss, round-robin, knockout; tie-breakers.'],
                                            ['title' => 'Dispute Resolution Workflow', 'description' => 'Player proofs, staff review, role-gated actions.'],
                                            ['title' => 'Responsive Design', 'description' => 'TailwindCSS for a mobile-friendly, accessible experience.'],
                                            ['title' => 'Automatic Backups', 'description' => 'Database & file backups with retention policies.'],
                                            ['title' => 'Audit Logs', 'description' => 'Track critical actions for accountability.'],
                                            ['title' => 'Scheduling & Check-ins', 'description' => 'Auto-scheduling, TZ-aware, reminders, no-shows.'],
                                            ['title' => 'Match Reporting & Proofs', 'description' => 'Scores, media uploads, audits, disputes.'],
                                            ['title' => 'Stats & Leaderboards', 'description' => 'Player/team analytics; season & lifetime.'],
                                            ['title' => 'Anti-Abuse & Fair Play', 'description' => 'Duplicate detection, cooldowns, moderation.'],
                                            ['title' => 'Roles & Permissions', 'description' => 'Spatie-powered, customizable roles & abilities.'],
                                            ['title' => '2FA & Security', 'description' => 'Laravel Sanctum, API tokens, best practices.'],
                                            ['title' => 'Third-Party Integrations', 'description' => 'Email (SendMail, SMTP, IMAP & POP3), OAuth (Google, Discord), game APIs.'],
                                            ['title' => 'Custom Drafting & Rosters', 'description' => 'Flexible roster sizes, custom positions, auto-drafting.'],
                                            ['title' => 'Email Notifications', 'description' => 'Configurable email alerts for key events.'],
                                            ['title' => 'Discord Notifications', 'description' => 'Optional Discord webhooks for real-time updates.'],
                                            ['title' => 'API Access', 'description' => 'RESTful API for integration with other services.'],
                                        ],
                                        'screenshots' => [
                                            ['file' => 'sending_email_with_api.png', 'caption' => 'Email API integration / notifications'],
                                            ['file' => 'wes_2-factor-auth.png', 'caption' => 'Two-factor authentication (TOTP / recovery codes)'],
                                            ['file' => 'wes_API_match_fetch.png', 'caption' => 'Fetch club matches via EA API'],
                                            ['file' => 'wes_club_dashboard.png', 'caption' => 'Club dashboard (stats, roster, recent games)'],
                                            ['file' => 'wes_club_roster_control.png', 'caption' => 'Roster actions (trades, send-down, IR, release)'],
                                            ['file' => 'wes_login_auth.png', 'caption' => 'Login screen (Google / Discord / credentials)'],
                                        ],
                                        'faqs' => [
                                            ['question' => 'Can it power seasonal leagues and weekend cups?', 'answer' => 'Yes—supports recurring seasons and one-offs with multiple formats.'],
                                            ['question' => 'Is there an admin workflow for disputes?', 'answer' => 'Players submit proofs; staff review with role-gated actions and audit trails.'],
                                            ['question' => 'Do you integrate game data?', 'answer' => 'Where possible—parsers/webhooks enrich stats and reduce manual input.'],
                                            ['question' => 'Can I customize roles and permissions?', 'answer' => 'Yes, with Spatie Permissions you can create roles and fine-tune abilities.'],
                                        ],
                                        'order_column' => 1,
                                    ]);

                                    Page::create([
                                        'name' => 'Al-Mills HVAC',
                                        'subtitle' => 'Lead Generation SPA & Contact Form',
                                        'summary' => 'A single-page application (SPA) designed for lead generation for Al-Mills HVAC. The core of the site is a dedicated contact page built with Livewire that captures customer inquiries and sends automated email notifications to the sales team.',
                                        'meta_description' => 'Lead generation website for Al-Mills HVAC featuring a Livewire-powered contact form for service inquiries.',
                                        'og_image_path' => 'storage/images/al-mills/am_contact_form.png',
                                        'route_name' => 'al-mills-hvac',
                                        'external_url' => '#',
                                        'tech_stack' => [
                                            'Laravel', 'Livewire', 'Alpine.js', 'TailwindCSS', 'MySQL', 'SMTP Email'
                                        ],
                                        'features' => [
                                            ['title' => 'Single-Page Application', 'description' => 'A fast, modern SPA layout for a seamless user experience.'],
                                            ['title' => 'Livewire Contact Form', 'description' => 'A real-time, interactive contact form for capturing service requests.'],
                                            ['title' => 'Automated Email Notifications', 'description' => 'Instantly notifies the admin team via email upon form submission.'],
                                            ['title' => 'Responsive Design', 'description' => 'The site is fully responsive and optimized for desktop, tablet, and mobile devices.'],
                                            ['title' => 'Custom Validation', 'description' => 'Real-time validation on the contact form to ensure data accuracy.'],
                                        ],
                                        'screenshots' => [
                                            ['file' => 'am_homepage.png', 'caption' => 'Al-Mills HVAC landing page.'],
                                            ['file' => 'am_contact_form.png', 'caption' => 'Livewire-powered contact form for lead generation.'],
                                            ['file' => 'am_email_notification.png', 'caption' => 'Example of the email notification sent on submission.'],
                                        ],
                                        'faqs' => [
                                            ['question' => 'How are new leads handled?', 'answer' => 'When a user submits the contact form, an email is automatically sent to the Al-Mills HVAC team with the customer\'s details.'],
                                            ['question' => 'What was the main goal of the project?', 'answer' => 'The primary goal was to create an online presence and a simple, effective channel for generating new customer leads.'],
                                        ],
                                        'order_column' => 2,
                                    ]);

                                    Page::create([
                                        'name' => 'Al-Anon Online Meeting Finder',
                                        'subtitle' => 'WordPress & TypeScript Integration',
                                        'summary' => 'Developed a high-performance meeting finder by integrating a custom TypeScript application with an existing WordPress website. The tool fetches data from a remote API and provides a fast, searchable, and map-based interface for users to find local meetings.',
                                        'meta_description' => 'Custom TypeScript meeting finder integrated with WordPress for Al-Anon. Fast, searchable, and map-based.',
                                        'og_image_path' => 'storage/images/al-anon/aa_finder.png',
                                        'route_name' => 'al-anon',
                                        'external_url' => '#',
                                        'tech_stack' => [
                                            'WordPress', 'TypeScript', 'React', 'Google Maps API', 'REST API', 'Custom Plugin'
                                        ],
                                        'features' => [
                                            ['title' => 'Location-Based Search', 'description' => 'Find meetings nearby using geolocation or by searching for a city or zip code.'],
                                            ['title' => 'Advanced Filtering', 'description' => 'Filter meetings by day of the week, time, and meeting type (e.g., open, closed, beginner).'],
                                            ['title' => 'Interactive Map View', 'description' => 'Display meeting locations on a Google Map with clickable markers for details.'],
                                            ['title' => 'Printable Schedules', 'description' => 'Generate a clean, printable list of meetings based on current search and filter criteria.'],
                                            ['title' => 'Seamless WordPress Integration', 'description' => 'The finder is embedded directly into the site using a custom WordPress plugin for a cohesive user experience.'],
                                        ],
                                        'screenshots' => [
                                            ['file' => 'aa_finder.png', 'caption' => 'The main meeting finder interface with map and list views.'],
                                            ['file' => 'aa_filters.png', 'caption' => 'Filtering options to narrow down meeting results.'],
                                            ['file' => 'aa_details.png', 'caption' => 'Meeting detail view shown after clicking a map marker.'],
                                        ],
                                        'faqs' => [
                                            ['question' => 'How is the meeting data updated?', 'answer' => 'The application syncs with a central meeting database via a REST API to ensure all information is current.'],
                                            ['question' => 'Does it work on mobile devices?', 'answer' => 'Yes, the interface is fully responsive and optimized for both desktop and mobile browsers.'],
                                        ],
                                        'order_column' => 3,
                                    ]);
                                }
                            }
