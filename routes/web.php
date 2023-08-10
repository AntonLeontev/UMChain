<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralLinkController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
], function()
{
	Route::get('/', [PageController::class, 'home'])->name('home');

	if (app()->isLocal()) {
		Route::get('test', function() {
			return __('notifications.test', ['value' => 125]);
		});
	}

	Route::prefix('cabinet')
		->middleware('auth')
		->group(function() {
			Route::get('/', [PageController::class, 'cabinet'])->name('cabinet');

			Route::get('/wallet', [PageController::class, 'cabinet'])->name('cabinet.wallet');

			Route::get('personal', [PageController::class, 'cabinet'])->name('cabinet.personal');
			Route::get('portfolio', [PageController::class, 'cabinet'])->name('cabinet.portfolio');
			Route::get('password', [PageController::class, 'cabinet'])->name('cabinet.password');
			Route::get('referral', [PageController::class, 'cabinet'])->name('cabinet.referral');
			Route::get('banners', [PageController::class, 'cabinet'])->name('cabinet.banners');
			Route::get('notifications', [PageController::class, 'cabinet'])->name('cabinet.notifications');
	});

	Route::prefix('users')
		->middleware(['precognitive', 'auth'])
		->group(function() {
			Route::put('update', [ProfileController::class, 'update'])->name('users.update');
			Route::put('update-password', [ProfileController::class, 'updatePassword'])->name('users.update-password');
		});

	Route::prefix('orders')
		->middleware(['precognitive', 'auth'])
		->group(function() {
			Route::post('create', [OrderController::class, 'create'])->name('orders.create');
			Route::put('{order}/make-paid', [OrderController::class, 'makePaid'])->name('orders.make-paid');
		});

	Route::prefix('reflinks')
		->group(function() {
			Route::post('create', [ReferralLinkController::class, 'create'])->name('reflinks.create');
		});

	Route::prefix('withdraw')
		->middleware(['precognitive', 'auth'])
		->group(function() {
			Route::post('exchange', [WithdrawalController::class, 'exchange'])->name('withdraw.exchange');
			Route::post('create', [WithdrawalController::class, 'create'])->name('withdraw.create');
		});

	Route::post('notifications/mark-as-read', [NotificationController::class, 'markRead'])
		->middleware(['auth'])
		->name('notifications.mark-read');

	
	
	require __DIR__.'/auth.php';
});


Route::prefix(config('moonshine.route.prefix', ''))
    ->as('moonshine.')->group(static function () {
		Route::controller(AdminAuthController::class)
                ->group(static function (): void {
                    Route::post('/authenticate', 'authenticateFirstFactor')->name('authenticate');
                    Route::post('/authenticate2f', 'authenticateSecondFactor')->name('authenticate2f');
                });
	});
