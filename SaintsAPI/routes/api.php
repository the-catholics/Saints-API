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


// LANGUAGE ROUTES
Route::post('/create/language', [ConstantController::class, 'storeLanguage']);
Route::get('/language', [ConstantController::class, 'getAllLanguages']);
Route::get('/language/{id}', [ConstantController::class, 'showLanguage']);
Route::delete('/delete/language/{id}', [ConstantController::class, 'destroyLanguage']);

// MERIT ROUTES
Route::post('/create/merit', [ConstantController::class, 'storeMerit']);
Route::get('/merit', [ConstantController::class, 'indexMerit']);
Route::get('/merit/{id}', [ConstantController::class, 'showMerit']);
Route::delete('/delete/merit/{id}', [ConstantController::class, 'destroyMerit']);

// ARTIFACT_TYPE ROUTES
Route::post('/create/artifact-type', [ConstantController::class, 'storeArtifactType']);
Route::get('/artifact-type', [ConstantController::class, 'indexArtifactType']);
Route::get('/artifact-type/{id}', [ConstantController::class, 'showArtifactType']);
Route::delete('/delete/artifact-type/{id}', [ConstantController::class, 'destroyArtifactType']);



// LINK_TYPE ROUTES
Route::post('/create/link-type', [ConstantController::class, 'storeLinkType']);
Route::get('/link-type', [ConstantController::class, 'indexLinkType']);
Route::get('/link-type/{id}', [ConstantController::class, 'showLinkType']);
Route::delete('/delete/link-type/{id}', [ConstantController::class, 'destroyLinkType']);
