<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralLinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')
    ->prefix('v1')
    ->group(function () {

        Route::prefix('user')
            ->controller(ProfileController::class)
            ->group(function () {
                Route::get('/', 'current')->name('api.user');
                Route::put('update', 'update')->name('api.user.update');
                Route::put('update-password', 'updatePassword')->name('api.password.update');
                Route::get('notifications', [NotificationController::class, 'index'])->name('api.user.notifications.index');
                Route::post('notifications/mark-as-read', [NotificationController::class, 'markRead'])
                    ->name('api.user.notifications.mark-read');
            });

        Route::post('reflinks/create', [ReferralLinkController::class, 'create'])->name('api.reflinks.create');
    });
