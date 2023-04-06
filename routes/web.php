<?php

use App\Http\Controllers\AdminController;
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

//------------------------- Dashboard----------------------

//Show all users
Route::get('/dashboard/users/listings', [AdminController::class, 'index']);

//Show Create user form
Route::get('/dashboard/users/create', [AdminController::class, 'create']);

//Add User
Route::post('/dashboard/users/add', [AdminController::class, 'add']);

//Edit user
Route::get('/dashboard/{user}/edit', [AdminController::class, 'edit']);

//Update User
Route::put('/dashboard/{user}', [AdminController::class, 'update']);

//Delete User
Route::delete('dashboard/{user}', [AdminController::class, 'destroy']);
/*  ------------------------------------------------------*/
Route::get('/sensorData', [SensorDataController::class, 'show']);

//Logout Users
Route::post('/logout', [UserController::class, 'logout']);

// Notification
Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotification']);

