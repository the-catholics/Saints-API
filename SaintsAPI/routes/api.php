<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConstantController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// LANGUAGES CONTROLLER
Route::post('/create/language', [ConstantController::class, 'storeLanguage']);
Route::get('/language', [ConstantController::class, 'getAllLanguages']);
Route::get('/language/{id}', [ConstantController::class, 'showLanguage']);
Route::delete('/delete/language/{id}', [ConstantController::class, 'destroyLanguage']);
