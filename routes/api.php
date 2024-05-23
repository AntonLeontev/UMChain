<?php

use App\Http\Controllers\AIGenerationController;
use App\Http\Controllers\GoogleFitController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralLinkController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WithdrawalController;
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
                Route::get('referral-data', 'referralData')->name('api.user.referral-data');

                Route::get('notifications', [NotificationController::class, 'index'])->name('api.user.notifications.index');
                Route::post('notifications/mark-as-read', [NotificationController::class, 'markRead'])
                    ->name('api.user.notifications.mark-read');

                Route::get('calories', [GoogleFitController::class, 'calories'])
                    ->name('api.user.google.calories');

                Route::post('withdraw/create', [WithdrawalController::class, 'create'])
                    ->name('api.user.withdraw.create');
            });

        Route::post('reflinks/create', [ReferralLinkController::class, 'create'])->name('api.reflinks.create');

        Route::get('transactions', [TransactionController::class, 'index'])->name('api.transactions.index');

        Route::get('generate-menu', [AIGenerationController::class, 'generateMenu'])->name('api.generate-menu');
    });
