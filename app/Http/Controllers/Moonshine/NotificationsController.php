<?php

namespace App\Http\Controllers\Moonshine;

use App\Actions\SendAdminNotification;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function notificate(Request $request, SendAdminNotification $sendAdminNotification)
    {
        $sendAll = count($request->user_id) === 1 && $request->user_id[0] === 'all';

        $users = User::query()
            ->unless($sendAll, fn ($q) => $q->whereIn('id', $request->user_id))
            ->lazy();

        $request->text_en = $request->text_en ?? $request->text_ru;

        foreach ($users as $user) {
            $sendAdminNotification->handle($user, $request->text_ru, $request->text_en);
        }

        if ($request->ajax()) {
            return response()->json(['message' => 'Уведомления отправлены']);
        }

        return back()->with('notification_sent', 'Уведомления отправлены успешно');
    }
}
