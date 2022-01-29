<?php

use App\Http\Controllers\Admin\BaseController as AdminBaseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/', [AdminBaseController::class, 'index'])->name('index');


// Resourse routes
Route::resource('/notice', NoticeController::class)->names('notice');
Route::resource('/event', EventController::class)->names('event');
Route::resource('/settings', OptionController::class)->names('setting');