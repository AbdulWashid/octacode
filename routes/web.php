<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\com\{
    homeController,
    contactController
};






Route::get('/',[homeController::class,'index']);


Route::get('/contact',[contactController::class,'index'])->name('contactPage');
Route::POST('contact-data',[contactController::class,'contactData'])->name('contactData');

Route::get('projects',function(){
    return view('com.services-grid');
});






Route::get('admin',function(){
    return view('admin.index');
});
Route::prefix('institude')->name('institude.')->group(function(){
    Route::get('index',function(){
        return view('inst.index');
    })->name('index');
});