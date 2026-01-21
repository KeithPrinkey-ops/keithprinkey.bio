
@props([
    // [ ['file.png','Caption'], ... ]
    'shots' => [],
    // base path for your storage symlink
    'base' => 'storage/images',
    // how many to show before "Show all"
    'initial' => 6,
])

<section class="mx-auto max-w-7xl px-6 py-8" x-data="{showAll:false, lightbox:null}">
    <div class="grid md:grid-cols-3 gap-4">
        @foreach (array_slice($shots, 0, $initial) as [$file, $cap])
            <figure class="rounded-xl border border-gray-200 dark:border-gray-500 bg-white dark:bg-gray-600 p-3">
                <button class="block w-full overflow-hidden rounded-lg ring-1 ring-slate-200 dark:ring-slate-600"
                        @click="lightbox='{{ asset("$base/$file") }}'">
                    <img src="{{ asset("$base/$file") }}"
                         alt="{{ $cap }}"
                         loading="lazy" decoding="async"
                         class="w-full h-auto">
                </button>
                <figcaption class="mt-2 text-xs text-gray-600 dark:text-gray-300">{{ $cap }}</figcaption>
            </figure>
        @endforeach
    </div>

    @if (count($shots) > $initial)
        <div class="grid md:grid-cols-3 gap-4 mt-4" x-show="showAll" x-collapse>
            @foreach (array_slice($shots, $initial) as [$file, $cap])
                <figure class="rounded-xl border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-700 p-3">
                    <button class="block w-full overflow-hidden rounded-lg ring-1 ring-slate-200 dark:ring-slate-700"
                            @click="lightbox='{{ asset("$base/$file") }}'">
                        <img src="{{ asset("$base/$file") }}"
                             alt="{{ $cap }}"
                             loading="lazy" decoding="async"
                             class="w-full h-auto">
                    </button>
                    <figcaption class="mt-2 text-xs text-gray-600 dark:text-gray-300">{{ $cap }}</figcaption>
                </figure>
            @endforeach
        </div>

        <div class="mt-6 text-center">
            <button @click="showAll=!showAll"
                    class="inline-flex items-center rounded-xl px-4 py-2 border border-gray-200 dark:border-gray-700 text-gray-500 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-500">
                <span x-show="!showAll">Show all screenshots ({{ count($shots) - $initial }})</span>
                <span x-show="showAll">Show fewer</span>
            </button>
        </div>
    @endif

    {{-- Minimal lightbox --}}
    <div x-show="lightbox" x-transition class="fixed inset-0 z-50 bg-black/80 p-4 sm:p-8"
         @keydown.escape.window="lightbox=null" @click.self="lightbox=null" style="display:none">
        <div class="mx-auto max-w-6xl">
            <img :src="lightbox" alt="" class="w-full h-auto rounded-lg shadow-2xl">
            <div class="mt-4 text-center">
                <button class="rounded-xl px-4 py-2 bg-white text-slate-900" @click="lightbox=null">Close</button>
            </div>
        </div>
    </div>
</section>
