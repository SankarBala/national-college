<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;
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

Route::get('/', [BaseController::class, 'index'])->name('index');
Route::get('/about-us', [BaseController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [BaseController::class, 'contactUs'])->name('contact-us');
Route::get('/faq', [BaseController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [BaseController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-use', [BaseController::class, 'termsOfUse'])->name('terms-of-use');
Route::get('/course', [BaseController::class, 'course'])->name('course');

// Resourse routes
Route::resource('/event', EventController::class)->only('index', 'show');
Route::resource('/notice', NoticeController::class)->names('notice');
Route::resource('/message', MessageController::class)->only(['store'])->names('message');
// Auth::routes();

// Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


