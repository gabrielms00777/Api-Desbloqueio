<?php

use App\Http\Controllers\Unlock\ResetCountController;
use App\Http\Controllers\Unlock\ShowRepController;
use App\Http\Controllers\Unlock\StoreUnlockController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/rep', ShowRepController::class)->name('rep.show');
Route::post('/unlock', StoreUnlockController::class)->name('unlock.store');
Route::post('/reset-count', ResetCountController::class)->name('reset.count');

Route::get('teste', function(){
    return 'ok';
});