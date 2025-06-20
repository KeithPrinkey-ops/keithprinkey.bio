<form wire:submit.prevent="submit" enctype="multipart/form-data" class="max-w-6xl mx-auto space-y-6">
    @csrf

    {{-- Title --}}
    <div>
        <x-label for="title">Title</x-label>
        <x-input id="title" type="text" wire:model.defer="title" class="w-full" />
        <x-input-error for="title" />
    </div>

    {{-- Slug --}}
    <div>
        <x-label for="slug">Slug</x-label>
        <x-input id="slug" type="text" wire:model.defer="slug" class="w-full" />
        <x-input-error for="slug" />
    </div>

    {{-- Excerpt --}}
    <div>
        <x-label for="excerpt">Excerpt</x-label>
        <x-input id="excerpt" type="text" wire:model.defer="excerpt" class="w-full" />
        <x-input-error for="excerpt" />
    </div>

    {{-- Category — absolutely no Alpine on this wrapper --}}
    <div class="relative">
        <x-label for="category_id">Category</x-label>
        <select
            id="category_id"
            wire:model.defer="category_id"
            class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white"
        >
            <option value="">Select a category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        <x-input-error for="category_id" />
    </div>

    {{-- Hero Image --}}
    <div>
        <x-label for="hero_image">Hero Image</x-label>
        <x-input id="hero_image" type="file" wire:model="hero_image" class="w-full" />
        <x-input-error for="hero_image" />
    </div>

    {{-- Thumb Image --}}
    <div>
        <x-label for="thumb_image">Thumbnail Image</x-label>
        <x-input id="thumb_image" type="file" wire:model="thumb_image" class="w-full" accept=".ico" />
        <x-input-error for="thumb_image" />
    </div>

    {{-- Body --}}
    <div>
        <x-label for="body">Body</x-label>
        <textarea id="body" wire:model.defer="body" class="w-full h-48"></textarea>
        <x-input-error for="body" />
    </div>

    {{-- Submit --}}
    <div class="mt-6">
        <button
            type="submit"
            wire:loading.attr="disabled"
            wire:target="submit"
            class="px-4 py-2 bg-blue-600 text-white rounded"
        >
            Create Post
        </button>

        {{-- Success message --}}
        @if (session()->has('message'))
            <span class="ml-4 text-green-600">{{ session('message') }}</span>
        @endif
    </div>
</form>
