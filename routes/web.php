<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\FitController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\GoogleFitController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralLinkController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (app()->isLocal()) {
    Route::get('test', function () {
    });
}

if (! request()->ajax()) {
    Route::get('/{vue_capture?}', function () {
        return view('home');
    })->where('vue_capture', '[\/\w\.-]*');
}

Route::get('/reset-password', function (Request $request) {
    return view('auth.reset-password', ['request' => $request]);
})->name('password.reset');

Route::middleware(['localeSessionRedirect', 'localizationRedirect'])
    ->prefix(LaravelLocalization::setLocale())
    ->group(function () {
        Route::prefix('cabinet')
            ->middleware(['auth'])
            ->group(function () {
                Route::get('/', [PageController::class, 'cabinet'])->name('cabinet');

                Route::get('/wallet', [PageController::class, 'cabinet'])->name('cabinet.wallet');

                Route::get('personal', [PageController::class, 'cabinet'])->name('cabinet.personal');
                Route::get('portfolio', [PageController::class, 'cabinet'])->name('cabinet.portfolio');
                Route::get('password', [PageController::class, 'cabinet'])->name('cabinet.password');
                Route::get('referral', [PageController::class, 'cabinet'])->name('cabinet.referral');
                Route::get('banners', [PageController::class, 'cabinet'])->name('cabinet.banners');
                Route::get('notifications', [PageController::class, 'cabinet'])->name('cabinet.notifications');
                Route::get('fitProfile', [PageController::class, 'cabinet'])->name('cabinet.fit.profile');
                Route::get('fitCalculator', [PageController::class, 'cabinet'])->name('cabinet.fit.calculator');

                Route::prefix('users')
                    ->middleware(['precognitive', 'auth'])
                    ->group(function () {
                        Route::put('update', [ProfileController::class, 'update'])->name('users.update');
                        Route::put('update-password', [ProfileController::class, 'updatePassword'])->name('users.update-password');
                        Route::put('fit-update', [FitController::class, 'update'])->name('users.fit.update');
                    });

                Route::prefix('orders')
                    ->middleware(['precognitive', 'auth'])
                    ->group(function () {
                        Route::post('create', [OrderController::class, 'create'])->name('orders.create');
                        Route::put('{order}/make-paid', [OrderController::class, 'makePaid'])->name('orders.make-paid');
                    });

                Route::prefix('reflinks')
                    ->group(function () {
                        Route::post('create', [ReferralLinkController::class, 'create'])->name('reflinks.create');
                    });

                Route::prefix('withdraw')
                    ->middleware(['precognitive', 'auth'])
                    ->group(function () {
                        Route::post('exchange', [WithdrawalController::class, 'exchange'])->name('withdraw.exchange');
                        Route::post('create', [WithdrawalController::class, 'create'])->name('withdraw.create');
                    });

                Route::post('notifications/mark-as-read', [NotificationController::class, 'markRead'])
                    ->name('notifications.mark-read');
            });
    });

Route::middleware(['auth'])
    ->group(function () {
        Route::get('google/auth', [GoogleAuthController::class, 'auth'])
            ->name('google.auth');

        Route::any('google/code', [GoogleAuthController::class, 'code'])
            ->name('google.code');
    });

Route::middleware(['auth'])
    ->get('user/calories', [GoogleFitController::class, 'calories'])
    ->name('user.google.calories');

Route::prefix(config('moonshine.route.prefix', ''))
    ->as('moonshine.')
    ->middleware('throttle:3,5')
    ->group(static function () {
        Route::controller(AdminAuthController::class)
            ->group(static function (): void {
                Route::post('/authenticate', 'authenticateFirstFactor')->name('authenticate');
                Route::post('/authenticate2f', 'authenticateSecondFactor')->name('authenticate2f');
            });
    });
