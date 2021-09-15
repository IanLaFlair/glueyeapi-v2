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

Route::get('/test', [TipsController::class, 'feed_tips']);

Route::middleware(['IsOpen'])->group(function () {
    // Login Route
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::post('/login', [AuthWebController::class, 'login']);

    // Open for WebView Route
    Route::get('/tips', [TipsController::class, 'feed_tips']);
    Route::get('/tips/{id}', [TipsController::class, 'detail']);

    // Route for API
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::get('/signin', [AuthController::class, 'signin']);
    Route::post('/history_blood', [ApiController::class, 'history_blood']);
    Route::get('/history_blood', [ApiController::class, 'history_blood']);
    Route::post('/graph_blood', [ApiController::class, 'graph_blood']);
    Route::get('/graph_blood', [ApiController::class, 'graph_blood']);
});

Route::middleware(['IsWeb'])->group(function () {
    // Route Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard_data', [DashboardController::class, 'dashboard_data']);

    // Route List User
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/list_user', [UserController::class, 'list_user']);

    // Route Tips
    Route::get('/list_tips', [TipsController::class, 'index']);
    Route::get('/list_data_tips', [TipsController::class, 'list']);
    Route::get('/create_tips', [TipsController::class, 'store']);
    Route::post('/store_tips', [TipsController::class, 'store']);
    Route::get('/tips', [TipsController::class, 'feed_tips']);
    Route::get('/tips/{id}', [TipsController::class, 'detail']);
    Route::get('/edit_tips/{id}', [TipsController::class, 'edit']);
    Route::post('/edit_tips/{id}', [TipsController::class, 'edit']);
    Route::post('/delete_tips/{id}', [TipsController::class, 'delete']);
});
