<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'home']);

Route::get('/service/{slug}', [LandingPageController::class, 'service']);

Route::get('/article', [LandingPageController::class, 'article']);

Route::controller(AdminController::class)->prefix("admin")->group(function () {
  Route::get('/', 'home');
  Route::get('/login', 'login')->middleware('alreadyLoggedIn');
  Route::post('/do-login', 'doLogin');
  Route::get('/dashboard', 'dashboard')->middleware('isLoggedIn');
  Route::get('/logout', 'logout');
});
