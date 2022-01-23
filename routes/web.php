<?php

use App\Http\Controllers\BaseController;
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

