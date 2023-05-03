<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AccessoryController;

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
// Route::middleware('auth:sanctum')->group(function () {
    // define all resource controller ...
    Route::resources([
        'clients' => ClientController::class,
        'employees' => EmployeController::class,
        'users' => UserController::class,
        'rooms' => RoomController::class,
        'bookings' => BookingController::class,
        'accessories' => AccessoryController::class,
    ]);
// });
Route::post('login', [AuthenticationController::class, 'authenticate']);
