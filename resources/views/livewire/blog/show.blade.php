<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-4xl font-bold text-white mb-4">{{ $post->title }}</h1>
    <div class="flex items-center text-sm text-gray-400 mb-6">
        <span class="mr-2">{{ $post->author->name }}</span>
        <span>·</span>
        <span class="ml-2">{{ $post->created_at->format('F j, Y') }}</span>
    </div>
    @if($post->hero_image_path)
        <img src="{{ asset($post->hero_image_path) }}" alt="{{ $post->title }}" class="h-auto w-auto object-cover object-center rounded-xl mb-6" />
    @endif
    <div class="prose prose-invert max-w-none text-white">
        {!! $post->body !!}
    </div>
</div>
