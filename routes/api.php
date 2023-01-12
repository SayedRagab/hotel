<?php

use App\Http\Controllers\AuthController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('refresh-token', [AuthController::class, 'refresh']);

Route::middleware(['custom.auth:api'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    //**Profile */
    Route::prefix('profile')->group(function () {
        Route::get('/', [AuthController::class, 'profile']);
    });
});
