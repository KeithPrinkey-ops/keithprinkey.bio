<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-6">Uploaded Service Icons</h1>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-3 gap-4">
                @foreach($icons as $icon)
                    <div class="border rounded p-4 bg-white">
                        <img src="{{ Storage::url($icon) }}" alt="{{ basename($icon) }}" class="w-full h-32 object-contain mb-2">
                        <p class="text-xs text-gray-600 truncate">{{ basename($icon) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
