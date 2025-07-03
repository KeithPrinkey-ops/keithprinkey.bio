<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NotificationsDropdown extends Component
{
    public function getNotificationsProperty()
    {
        return Auth::user()
            ->unreadNotifications()
            ->take(10)
            ->get()
            ->map(function ($notification) {
                $notification->decoded = $notification->data; // Already array, but ensure it's accessible
                return $notification;
            });
    }

    public function markAsRead($notificationId)
    {
        $notification = Auth::user()->unreadNotifications()->find($notificationId);
        if ($notification) {
            $notification->markAsRead();
        }
    }

    public function render()
    {
        return view('livewire.notifications-dropdown');
    }
}
