<?php

use App\Http\Controllers\Admin\AchivementController;
use App\Http\Controllers\Admin\BaseController as AdminBaseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\TeacherController;
use Illuminate\Http\Request;
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
    Route::resource('/result', ResultController::class)->names('result');  
    Route::resource('/event', EventController::class)->names('event');
    Route::resource('/settings', OptionController::class)->names('setting');
    Route::resource('/message', MessageController::class)->except(['store'])->names('message');
    Route::resource('/teacher', TeacherController::class)->names('teacher');
    Route::resource('/achivement', AchivementController::class)->names('achivement');

    

    Route::post('/teacherpost', function (Request $request){
        return $request->all();
    })->name('teacherpost');

    Route::get('/test', function () {
        return  "test";
    })->middleware('admin');