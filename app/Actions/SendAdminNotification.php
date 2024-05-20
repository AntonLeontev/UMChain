<?php

namespace App\Actions;

use App\Models\User;
use App\Notifications\AdministrationNotification;

class SendAdminNotification
{
    public function handle(User $user, string $textRu, string $textEn): void
    {
        $user->notify(new AdministrationNotification($textRu, $textEn));
    }
}
