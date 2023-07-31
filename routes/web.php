<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

		Route::prefix('profile')->group(function() {
			Route::get('personal', [PageController::class, 'cabinet'])->name('cabinet.personal');
			Route::get('portfolio', [PageController::class, 'cabinet'])->name('cabinet.portfolio');
			Route::get('password', [PageController::class, 'cabinet'])->name('cabinet.password');
			Route::get('referral', [PageController::class, 'cabinet'])->name('cabinet.referral');
		});
	});


	
	
	require __DIR__.'/auth.php';
});
