<?php

namespace App\Http\Controllers;

class NotificationController extends Controller
{
    public function markRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
}
