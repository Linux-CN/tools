<?php

use Illuminate\Http\Request;
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


Route::prefix('/v1/')->middleware('auth:sanctum')->group(function (){
    # User
    Route::get('/user',[App\Http\Controllers\API\V1\UserController::class,'getUserInfo']);

    # Completion
    Route::post('/completions',[App\Http\Controllers\API\V1\CompletionController::class,'createCompletion']);
    # Post

    # Selector


});
