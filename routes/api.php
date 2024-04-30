<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\XPController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\TenantController;
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



Route::post('register', [UserController::class, 'register']);
Route::post('award-xp', [XPController::class, 'awardXP']);
Route::get('leaderboard', [LeaderboardController::class, 'getLeaderboard']);
Route::post('tenants', [TenantController::class, 'create']);
Route::delete('tenants/{id}', [TenantController::class, 'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
