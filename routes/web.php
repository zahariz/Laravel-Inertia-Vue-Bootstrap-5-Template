<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Auth/Login');
})->middleware('guest');

// prefix apps
Route::prefix('apps')->group(function () {

    // middleware auth
    Route::group(['middleware' => ['auth']], function () {
        // route dashboard
        Route::get('dashboard', DashboardController::class)->name('apps.dashboard');
    });
});


