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
// Route::get('/ds', function () {
//     return view('welcome');
// });
Route::get('/dashboard',[App\Http\Controllers\AdminController::class, 'index']) -> name('dashboard');


// Route::get('/daftar-course',[App\Http\Controllers\AdminCourseController::class, 'adminCourse']) ->name('admin-course');
use App\Http\Controllers\AdminCourseController;
Route::controller(AdminCourseController::class)->group(function() {
    Route::get('daftar-course/', 'index') ->name('admin-course');
    Route::get('daftar-course/add', 'add');
    Route::post('daftar-course/store', 'store');
    Route::get('daftar-course//edit/{id}', 'edit');
    Route::post('daftar-course/update/{id}', 'update');
    Route::get('daftar-course/delete/{id}', 'delete');
});



// Test
Route::get('/testing', function () {
    return view('pages.Admin.daftarCourse.addDataCourse');
});




