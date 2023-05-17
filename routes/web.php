<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SystemSPKController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\AdminCourseController;

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
//     return view('pages.Home');
// });

Route::get('/',[HomeController::class, 'index']) -> name('home');
Route::get('/course',[CourseController::class, 'index']) -> name('course');
Route::get('/statistics',[StatisticsController::class, 'index']) -> name('statistics');
Route::get('/feature',[FeatureController::class, 'index']) -> name('features');
Route::get('/system-spk',[SystemSPKController::class, 'index']) -> name('system-spk');
Route::get('/contact',[ContactController::class, 'index']) -> name('contact');

// Authentication
Route::get('/login',[AuthController::class, 'login']) -> name('login') ->middleware('guest');
Route::post('/login',[AuthController::class, 'authenticate']) ->middleware('guest');
Route::get('/logout',[AuthController::class, 'logout']) -> middleware('auth');


// Admin
// Route::get('/ds', function () {
//     return view('welcome');
// });
Route::get('/dashboard',[AdminController::class, 'index']) -> name('dashboard');


// Route::get('/daftar-course',[App\Http\Controllers\AdminCourseController::class, 'adminCourse']) ->name('admin-course');

Route::get('/daftar-course',[AdminCourseController::class, 'index']);
Route::get('daftar-course/add',[AdminCourseController::class, 'add']);
Route::post('daftar-course/store',[AdminCourseController::class, 'store']);
Route::get('daftar-course/edit/{id}',[AdminCourseController::class, 'edit']);
Route::post('daftar-course/update/{id}',[AdminCourseController::class, 'update']);
Route::get('daftar-course/delete/{id}',[AdminCourseController::class, 'delete']);

// Route::controller(AdminCourseController::class)->group(function() {
//     Route::get('daftar-course/', 'index');
//     Route::get('daftar-course/add', 'add');
//     Route::post('daftar-course/store', 'store');
//     Route::get('daftar-course/edit/{id}', 'edit');
//     Route::post('daftar-course/update/{id}', 'update');
//     Route::get('daftar-course/delete/{id}', 'delete');
// });

// Test
Route::get('/testing', function () {
    return view('pages.Admin.daftarCourse.add');
});




