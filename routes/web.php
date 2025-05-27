<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\scheduleCallController;

Route::get('/', function () {
    return view('com.index');
});

Route::POST('schedule_call',[scheduleCallController::class,'store'])->name('schedule_call.store');

Route::get('admin',function(){
    return view('admin.index');
});

Route::get('class',function(){
    return view('class.index');
}

);