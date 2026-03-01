@section('title', $post->title)

<div class="relative w-full py-16 bg-black bg-opacity-95">
    {{-- light & dark gradient --}}
    <div class="absolute inset-0 bg-gradient-to-b
                from-white via-transparent to-slate-800
                dark:from-slate-900 dark:via-slate-800 dark:to-black
                opacity-70"></div>

    <div class="relative max-w-3xl px-6 py-12 mx-auto space-y-8">
        {{-- Category Badge --}}
        <span class="rounded-xl inline-block px-3 py-1 text-xs font-semibold uppercase text-white
                     bg-{{ $post->category->color_class ?? 'gray' }}-500
                     dark:bg-{{ $post->category->color_class ?? 'gray' }}-600">
            {{ $post->category->name }}
        </span>

        {{-- Title --}}
        <h1 class="text-5xl font-extrabold leading-tight text-white dark:text-gray-100">
            {{ $post->title }}
        </h1>

        {{-- Meta --}}
        <div class="flex flex-col sm:flex-row sm:items-center text-sm
                    text-gray-400 dark:text-gray-300
                    space-y-2 sm:space-y-0 sm:space-x-2">
            <span>{{ $post->author->name }}</span>
            <span>·</span>
            <span>{{ $post->created_at->format('F j, Y') }}</span>
        </div>

        {{-- Body Content --}}
        <div class="prose prose-invert dark:prose-invert max-w-3xl mx-auto">
            {!! (new \Parsedown())->text($post->body) !!}
        </div>

        {{-- Excerpt / Summary --}}
        @if ($post->excerpt)
            <section class="prose prose-invert dark:prose-invert max-w-none text-gray-300 dark:text-gray-400">
                {!! $post->excerpt !!}
            </section>
        @endif
    </div>
</div>
