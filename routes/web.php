<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['localization','throttle:60,1'])->group(callback: function() {
    Route::get('/', [ViewController::class, 'viewLanding'])->name('landing');
    Route::get('/profile', [ViewController::class, 'viewProfile'])->name('profile');
    Route::get('/oauth/auth/{provider}', [AuthController::class, 'getRegister']);
    Route::get('/oauth/logout', [AuthController::class, 'getLogout'])->name('logout');

    Route::put('/users/me', [MeController::class, 'putUser'])->name('me-update');
    Route::delete('/users/me', [MeController::class, 'deleteUser'])->name('me-delete');
    Route::get('/locale/{locale}', [ViewController::class, 'getLocale'])->name('i18n');

    Route::get('/streamers/{twitchUsername}', [UsersController::class, 'getUser'])->name('seek-streamer')->middleware('throttle:20,1');
    Route::get('/test', [ViewController::class, 'viewTest']);
});
