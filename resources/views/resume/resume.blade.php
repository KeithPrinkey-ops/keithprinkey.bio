<x-guest-layout>
    @section('title', 'Keith Prinkey Résumé – Full-Stack Web Developer')
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-100">
            {{ __('My Resume') }}
        </h2>
    </x-slot>
    @section('description', 'View and download my résumé, showcasing my experience and skills as a full-stack web developer specializing in Laravel and Tailwind CSS.')
    <div class="py-10 mx-auto max-w-7xl md:px-16">
        {{-- Light = white / slate-100, Dark = slate-800 --}}
        <div class="bg-white dark:bg-slate-800 shadow-sm sm:rounded-lg p-6">
            <iframe
                src="{{ asset('resume_laravel.pdf') }}"
                class="w-full h-screen rounded-md dark:bg-slate-900"
                style="height: 80vh;">
            </iframe>

            <div class="mt-5 flex justify-center">
                {{-- Button inherits Jetstream’s dark styles automatically --}}
                <x-button>
                    <a href="{{ route('resume.download') }}" download>
                        {{ __('Download Resume') }}
                    </a>
                </x-button>
            </div>
        </div>
    </div>
</x-guest-layout>
