<?php

// app/Http/Controllers/NotificationController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $notifications = $request->user()->notifications()->latest()->paginate(10);
        return view('notifications.index', compact('notifications'));
    }

    /**
     * Mark the given notification as read.
     *
     * @param  \Illuminate\Notifications\DatabaseNotification  $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAsRead(DatabaseNotification $notification, Request $request)
    {
        // You might want to add authorization here
        // $this->authorize('update', $notification);

        $notification->markAsRead();

        return back();
    }

    /**
     * Delete the given notification.
     *
     * @param  \Illuminate\Notifications\DatabaseNotification  $notification
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(DatabaseNotification $notification, Request $request)
    {
        // You might want to add authorization here
        // $this->authorize('delete', $notification);

        $notification->delete();

        return back();
    }

}
