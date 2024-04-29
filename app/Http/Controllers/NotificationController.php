<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(auth()->user()->unreadNotifications);
    }

    public function markRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
}
