<?php

use Illuminate\Support\Facades\Route;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::controller(App\Http\Controllers\DashboardController::class)->prefix('/dashboard')->name('dashboard')->group(function (){
        Route::get('/','dashboard');
        Route::get('/faucet','faucet')->name('.faucet');
        Route::get('/completions','completions')->name('.completions');
    });
});
