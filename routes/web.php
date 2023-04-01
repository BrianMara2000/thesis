<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SensorDataController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

//Show register form
Route::get('/register', [UserController::class, 'register']);

//Create new users
Route::post('/users', [UserController::class, 'store']);

//Show login form
Route::get('/login', [UserController::class, 'login']);

//Login Users
Route::get('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/sensorData', [SensorDataController::class, 'show']);

//Logout Users
Route::post('/logout', [UserController::class, 'logout']);

// Notification
Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotification']);

