<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BandController;


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

//Route::post('/hello/{name}', [HelloWorldController::class, 'hello']);
Route::get('/bands', [BandController::class, 'getAll']);
Route::get('/bands/{id}', [BandController::class, 'getById']);
Route::post('/bands/gender/{gender}', [BandController::class, 'getBandsByGender']);
Route::post('/bands/store', [BandController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
