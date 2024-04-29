<?php

use App\Http\Controllers\ProfileController;
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

        Route::prefix('users')
            ->controller(ProfileController::class)
            ->group(function () {
                Route::get('current', 'current')->name('api.user');
                Route::put('update', 'update')->name('api.users.update');
                Route::put('update-password', 'updatePassword')->name('api.password.update');
            });
    });
