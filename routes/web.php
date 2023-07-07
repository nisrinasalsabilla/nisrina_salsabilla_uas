<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/grafik3', [DashboardController::class, 'grafik3']);
Route::get('/grafik4', [DashboardController::class, 'grafik4']);
Route::get('/grafik5', [DashboardController::class, 'grafik5']);
Route::get('/grafik6', [DashboardController::class, 'grafik6']);
Route::get('/grafik7', [DashboardController::class, 'grafik7']);
Route::get('/grafik8', [DashboardController::class, 'grafik8']);


