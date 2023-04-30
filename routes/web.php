<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']) -> name('home');
Route::get('/course',[App\Http\Controllers\CourseController::class, 'index']) -> name('course');
Route::get('/statistics',[App\Http\Controllers\StatisticsController::class, 'index']) -> name('statistics');
Route::get('/feature',[App\Http\Controllers\FeatureController::class, 'index']) -> name('features');
Route::get('/system-spk',[App\Http\Controllers\SystemSPKController::class, 'index']) -> name('system-spk');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index']) -> name('contact');

// Authentication
Route::get('/login',[App\Http\Controllers\AuthController::class, 'login']) -> name('login') ->middleware('guest');
Route::post('/login',[App\Http\Controllers\AuthController::class, 'authenticate']) ->middleware('guest');
Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout']) -> middleware('auth');


// Admin
Route::get('/ds', function () {
    return view('welcome');
});
// Route::get('/dashboard',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('/daftar-user',[App\Http\Controllers\AdminController::class, 'admin-user']) -> middleware('auth') -> name('admin-user') ;
Route::get('/daftar-course',[App\Http\Controllers\AdminController::class, 'daftar-course']) -> middleware('auth') -> name('admin-course');






