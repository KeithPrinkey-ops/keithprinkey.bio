{{-- resources/views/notifications/index.blade.php --}}
<x-app-layout>
    <div class="max-w-3xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Notifications</h1>

        <div class="bg-white shadow rounded divide-y">
            @forelse($notifications as $notification)
                <div class="px-4 py-3 {{ $notification->read_at ? 'bg-gray-50' : 'bg-blue-50' }}">
                    {{-- Check notification type --}}
                    @if ($notification->type === 'App\Notifications\NewPostNotification')
                        {{-- Blog Post Notification --}}
                        <div class="font-semibold text-lg text-gray-800">
                            <a href="{{ route('blog.show', $notification->data['slug']) }}" class="hover:underline">
                                New Post: {{ $notification->data['title'] }}
                            </a>
                        </div>
                        <div class="text-sm text-gray-700 italic">
                            {{ $notification->data['body'] }}
                        </div>
                    @else
                        {{-- Existing Contact Form Notification --}}
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
                    @endif

                    {{-- Common elements for all notifications --}}
                    <div class="text-xs text-gray-400 mt-2">
                        Received {{ $notification->created_at->diffForHumans() }}
                    </div>

                    <div class="mt-3 flex items-center space-x-2">
                        @if(!$notification->read_at)
                            <form method="POST" action="{{ route('notifications.read', $notification->id) }}">
                                @csrf
                                <button type="submit" class="text-sm text-blue-600 hover:text-blue-800 font-semibold">Mark as Read</button>
                            </form>
                        @endif
                        <form method="POST" action="{{ route('notifications.destroy', $notification->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-red-600 hover:text-red-800 font-semibold">Delete</button>
                        </form>
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
