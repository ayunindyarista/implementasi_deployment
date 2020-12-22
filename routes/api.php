<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// api barcode

//index -> get
Route::get('/Barcode/API/Index',\App\Http\Controllers\BarcodeController::class . '@barcode');

//insert -> post
Route::post('/Barcode/API/Insert',\App\Http\Controllers\BarcodeController::class . '@insert');

//update -> put
Route::put('/Barcode/API/Update/{id}',\App\Http\Controllers\BarcodeController::class . '@update');

//delete -> delete
Route::delete('/Barcode/API/Delete/{id}',\App\Http\Controllers\BarcodeController::class . '@delete');
