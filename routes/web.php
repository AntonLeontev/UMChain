<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
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

	Route::prefix('cabinet')
		->middleware('auth')
		->group(function() {
			Route::get('/', [PageController::class, 'cabinet'])->name('cabinet');

			Route::get('/wallet', [PageController::class, 'cabinet'])->name('cabinet.wallet');

			Route::get('personal', [PageController::class, 'cabinet'])->name('cabinet.personal');
			Route::get('portfolio', [PageController::class, 'cabinet'])->name('cabinet.portfolio');
			Route::get('password', [PageController::class, 'cabinet'])->name('cabinet.password');
			Route::get('referral', [PageController::class, 'cabinet'])->name('cabinet.referral');
			Route::get('notifications', [PageController::class, 'cabinet'])->name('cabinet.notifications');
	});

	Route::prefix('users')
		->middleware(HandlePrecognitiveRequests::class)
		->group(function() {
			Route::put('update', [ProfileController::class, 'update'])->name('users.update');
			Route::put('update-password', [ProfileController::class, 'updatePassword'])->name('users.update-password');
		});

	Route::prefix('orders')
		->middleware(HandlePrecognitiveRequests::class)
		->group(function() {
			Route::post('create', [OrderController::class, 'create'])->name('orders.create');
			Route::put('{order}/make-paid', [OrderController::class, 'makePaid'])->name('orders.make-paid');
		});

	
	
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
