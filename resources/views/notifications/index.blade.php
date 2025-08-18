{{-- resources/views/notifications/index.blade.php --}}
<x-app-layout>
    <div class="max-w-3xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Notifications</h1>

        <div class="bg-white shadow rounded divide-y">
            @forelse($notifications as $notification)
                <div class="px-4 py-3 {{ $notification->read_at ? 'bg-gray-50' : 'bg-blue-50' }}">
                    <div class="font-semibold text-lg text-gray-800">
                        {{ $notification->data['first_name'] ?? 'Unknown' }} {{ $notification->data['last_name'] ?? '' }}
                    </div>

                    <div class="text-sm text-gray-600 mb-1">
                        <span class="font-medium">Email:</span> {{ $notification->data['email'] ?? 'N/A' }}
                    </div>

                    @if (!empty($notification->data['company']))
                        <div class="text-sm text-gray-600 mb-1">
                            <span class="font-medium">Company:</span> {{ $notification->data['company'] }}
                        </div>
                    @endif

                    @if (!empty($notification->data['subject']))
                        <div class="text-sm text-gray-600 mb-1">
                            <span class="font-medium">Subject:</span> {{ $notification->data['subject'] }}
                        </div>
                    @endif

                    @if (!empty($notification->data['message']))
                        <div class="text-sm text-gray-700 italic">
                            <span class="font-medium">Message:</span> {{ $notification->data['message'] }}
                        </div>
                    @endif

                    @if (!empty($notification->data['body']))
                        <div class="text-sm text-gray-700 italic">
                            <span class="font-medium">Message:</span> {{ $notification->data[''] }}
                        </div>
                    @endif

                    <div class="text-xs text-gray-400 mt-2">
                        Received {{ $notification->created_at->diffForHumans() }}
                    </div>
                </div>
            @empty
                <div class="px-4 py-3 text-gray-600 text-sm">
                    No notifications found.
                </div>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $notifications->links() }}
        </div>
    </div>
</x-app-layout>
