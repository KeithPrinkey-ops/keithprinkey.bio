<div class="relative">
    <button @click="open = !open" class="relative">
        <svg class="w-6 h-6" fill="none" stroke="currentColor"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
            </svg>
        </svg>
        @if($this->notifications->count())
            <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full"></span>
        @endif
    </button>
    <div x-show="open" class="absolute right-0 mt-2 w-80 bg-white shadow-lg rounded-md z-50">
        <div class="p-2">
            @forelse($this->notifications as $notification)
                <div class="flex items-center justify-between p-2 hover:bg-gray-100">
                    <div>
                        <div class="text-sm font-medium">
                            {{ $notification->decoded['title'] ?? 'Notification' }}
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ $notification->decoded['body'] ?? '' }}
                        </div>
                    </div>
                    <button wire:click="markAsRead('{{ $notification->id }}')" class="text-xs text-blue-500">Mark as read</button>
                </div>
            @empty
                <div class="p-2 text-gray-500 text-sm">No new notifications</div>
            @endforelse
        </div>
    </div>
</div>
