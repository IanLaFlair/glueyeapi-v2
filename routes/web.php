<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthWebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['IsOpen'])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::post('/login', [AuthWebController::class, 'login']);

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/signin', [AuthController::class, 'signin']);
});

Route::middleware(['IsWeb'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard_data', [DashboardController::class, 'dashboard_data']);
});
