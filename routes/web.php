<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\WithdrawalController;
use App\Services\Fit\FitService;
use Illuminate\Support\Facades\Route;

if (app()->isLocal()) {
    Route::get('test', function (FitService $service) {
    });
}

Route::middleware(['auth'])
    ->group(function () {
        Route::get('google/auth', [GoogleAuthController::class, 'auth'])
            ->name('google.auth');

        Route::any('google/code', [GoogleAuthController::class, 'code'])
            ->name('google.code');
    });

if (! request()->ajax()) {
    Route::get('/{vue_capture?}', function () {
        return view('home');
    })->where('vue_capture', '(?!'.config('moonshine.route.prefix').")[\/\w\.-]*");
}

// не удалять, нужен для отправки уведомлений
Route::get('reset-password', function () {
})->name('password.reset');

// TODO удалить если не нужны
// Route::middleware(['localeSessionRedirect', 'localizationRedirect'])
//     ->prefix(LaravelLocalization::setLocale())
//     ->group(function () {
//         Route::prefix('cabinet')
//             ->middleware(['auth'])
//             ->group(function () {

//                 Route::prefix('orders')
//                     ->middleware(['precognitive', 'auth'])
//                     ->group(function () {
//                         Route::post('create', [OrderController::class, 'create'])->name('orders.create');
//                         Route::put('{order}/make-paid', [OrderController::class, 'makePaid'])->name('orders.make-paid');
//                     });
//             });
//     });

Route::prefix(config('moonshine.route.prefix', ''))
    ->as('moonshine.')
    ->middleware('throttle:3,5')
    ->group(static function () {
        Route::controller(AdminAuthController::class)
            ->group(static function (): void {
                Route::post('/authenticate', 'authenticateFirstFactor')->name('authenticate');
                Route::post('/authenticate2f', 'authenticateSecondFactor')->name('authenticate2f');
            });

        Route::post('withdrawals/{withdrawal}/mark-sent', [WithdrawalController::class, 'markSent'])->name('withdrawals.mark-sent');
    });
