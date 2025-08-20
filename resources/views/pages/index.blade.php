<x-guest-layout>
    @php
        $title = 'My Work & Portfolio';
        $desc = 'A collection of projects showcasing my work in web development, including Laravel, Livewire, and more.';
    @endphp

    @push('meta')
        <title>{{ $title }}</title>
        <meta name="description" content="{{ $desc }}">
    @endpush

    <section class="bg-slate-100 dark:bg-slate-900">
        <div class="relative">
            <div class="absolute inset-0 w-screen h-full pb-20 transform opacity-20 dark:opacity-50">
                <img src="https://cdn.devdojo.com/images/march2021/bg-gradient.png" class="absolute left-0 object-cover w-full h-full" alt="Gradient Background">
            </div>
            <div class="relative px-6 py-16 ml-auto mr-auto bg-top bg-cover sm:py-20 max-w-7xl md:px-24 lg:px-16 lg:py-24">
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold text-slate-800 dark:text-white sm:text-5xl">
                        My Work & Portfolio
                    </h1>
                    <p class="max-w-2xl mx-auto mt-4 text-xl text-slate-500 dark:text-slate-400">
                        Here are a few projects I've worked on recently.
                    </p>
                </div>

                <div class="relative grid gap-6 mt-12 bg-top bg-cover sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($pages as $page)
                        <a href="{{ route('pages.show', $page->route_name) }}" class="flex flex-col overflow-hidden transition-shadow duration-200 bg-white border shadow-lg dark:bg-slate-800 dark:border-slate-700 rounded-2xl group hover:shadow-2xl">
                            <div class="overflow-hidden">
                                <img src="{{ asset($page->og_image_path) }}" alt="{{ $page->name }} Screenshot" class="object-cover w-full h-48 transition-transform duration-300 group-hover:scale-105">
                            </div>
                            <div class="flex flex-col justify-between p-6 space-y-4">
                                <div>
                                    <h3 class="text-xl font-bold text-slate-800 dark:text-white">{{ $page->name }}</h3>
                                    <p class="mt-1 text-sm leading-5 text-slate-500 dark:text-slate-400">{{ $page->subtitle }}</p>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(collect($page->tech_stack)->take(4) as $tech)
                                        <span class="px-2 py-1 text-xs rounded-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
