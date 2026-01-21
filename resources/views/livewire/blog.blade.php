<section class="relative w-full py-10 bg-black bg-opacity-95 sm:py-16">
                <div class="absolute inset-0 w-full h-full bg-blue-900 opacity-10"></div>
                <div class="max-w-6xl px-10 mx-auto">
                    {{-- Header --}}
                    <div class="flex justify-between w-full pb-5">
                        <div class="flex flex-col items-start sm:flex-row sm:items-center">
                            <div class="px-3 py-2 text-sm font-medium text-white uppercase bg-zinc-800">Auto Sorted By Views</div>
                            <h1 class="ml-3 text-3xl font-bold text-white sm:ml-5">Trending Blog Posts</h1>
                        </div>

                    </div>

                    {{-- Blog post grid: 4 per row on lg, 3 per row on md --}}
                    <div class="grid grid-cols-12 gap-1">
                        @foreach($trending as $post)
                            <a href="{{ route('blog.show', $post) }}"
                               class="rounded-xl relative flex flex-col items-start justify-end col-span-12 md:col-span-4 lg:col-span-3 px-5 pb-5 overflow-hidden bg-zinc-800 cursor-pointer h-96 group">
                                <img src="{{ asset($post->hero_image_path) }}" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover object-center transition duration-300 ease-out transform scale-100 group-hover:scale-105" />
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-transparent to-zinc-900 opacity-90"></span>
                                <span class="rounded-xl relative z-10 inline-block px-2 py-0.5 mb-3 text-xs font-medium uppercase bg-{{ $post->category->color_class }}-500 text-white">
        {!! $post->category->name !!}
    </span>
                                <span class="relative z-10 mb-3 text-xl font-bold leading-tight text-white">
                                    {{ $post->title }}
                                </span>
                                <span class="relative z-10 flex text-xs text-white opacity-90">
                                    <span class="mr-1 font-semibold">{{ $post->author->name }}</span>
                                    ·<span class="ml-1">{{ $post->created_at->format('F j, Y') }}</span>
                                </span>
                            </a>
                        @endforeach
                    </div>

                    {{-- Section below: categories and posts --}}
                    <div class="grid grid-cols-12 gap-10 mt-10">
                        @foreach($categories as $category)
                            @php
                                $mainCat = $category->mainCategory;
                                $sideCat = $category->sideCategory;
                                $trending = $category->trendingPosts;
                            @endphp

                            <div class="mb-10 col-span-12">
                                <h2 class="text-2xl font-bold text-white mb-4">{{ $mainCat->name }}</h2>
                            </div>

                            {{-- Main column --}}
                            <div class="col-span-12 md:col-span-8">
                                <div class="relative overflow-hidden border-b-2 border-{{ $mainCat->slug }}-500">
                                    <h4 class="px-3 py-1.5 bg-{{ $mainCat->slug }}-500 text-white uppercase text-sm inline-block font-medium">
                                        {{ $mainCat->name }}
                                    </h4>
                                </div>
                                @foreach($mainCat->posts as $post)
                                    <div class="flex items-center py-5 border-b border-zinc-900">
                                        <a href="{{ route('blog.show',$post) }}" class="w-1/3 h-40 overflow-hidden rounded-lg">
                                            <img src="{{ asset($post->hero_image_path) }}" alt="Blog Individual Image" class="w-full h-full object-cover transition duration-300 ease-out transform scale-100 hover:scale-105" />
                                        </a>
                                        <div class="w-2/3 pl-5">
                                            <h2 class="mb-3 text-xl font-bold leading-tight text-white">
                                                <a href="{{ route('blog.show',$post) }}">{{ $post->title }}</a>
                                            </h2>
                                            <p class="text-sm text-white opacity-50 line-clamp-2">{{ $post->excerpt }}</p>
                                            <span class="flex mt-3 text-xs text-white opacity-90">
                                                <span class="mr-1 font-semibold">{{ $post->author->name }}</span>·
                                                <span class="ml-1">{{ $post->created_at->format('F j, Y') }}</span>
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Sidebar --}}
                            <aside class="col-span-12 md:col-span-4 space-y-6">
                                <div class="relative overflow-hidden border-b-2 border-{{ $sideCat->slug }}-500">
                                    <h4 class="px-3 py-1.5 bg-{{ $sideCat->slug }}-500 text-white uppercase text-sm inline-block font-medium">
                                        {{ $sideCat->name }}
                                    </h4>
                                </div>
                                @foreach($sideCat->posts as $post)
                                    <a href="{{ route('blog.show',$post) }}" class="relative block w-full h-64 overflow-hidden rounded-lg group">
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-zinc-900 opacity-90"></div>
                                        <img src="{{ $post->hero_image_path }}" alt="Blog Post Image" class="object-cover object-bottom w-full h-full transition duration-300 ease-out transform scale-100 hover:scale-105" />
                                    </a>
                                    <h2 class="mt-5 mb-3 text-xl font-bold leading-tight text-white">
                                        <a href="{{ route('blog.show',$post) }}">{{ $post->title }}</a>
                                    </h2>
                                    <p class="text-sm text-white opacity-50">{{ $post->excerpt }}</p>
                                    <span class="flex mt-3 text-xs text-white opacity-90">
                                        <span class="mr-1 font-semibold">{{ $post->author->name }}</span>·
                                        <span class="ml-1">{{ $post->created_at->format('F j, Y') }}</span>
                                    </span>
                                @endforeach

                                <div class="flex items-center mt-7 space-x-4">
                                    <button class="text-white opacity-40 hover:opacity-80">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                    </button>
                                    <button class="text-white opacity-40 hover:opacity-80">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </button>
                                </div>
                            </aside>
                        @endforeach
                    </div>
                    <div class="flex gap-2 items-center">
                        <x-button
                            wire:click="previousPage"
                            :disabled="$trending->currentPage() <= 1"
                            class="text-white opacity-40 hover:opacity-80 disabled:opacity-20 transition"
                        >
                            ‹
                        </x-button>

                        <x-button
                            wire:click="nextPage"
                            :disabled="$trending->currentPage() >= $trending->lastPage()"
                            class="text-white opacity-40 hover:opacity-80 disabled:opacity-20 transition"
                        >
                            ›
                        </x-button>
                    </div>
                </div>
            </section>
