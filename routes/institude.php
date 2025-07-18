<?php
use App\Http\Controllers\inst\homeController;


Route::prefix('institude')->name('institude.')->group(function(){
    Route::get('index',[homeController::class,'index'])->name('index');
    Route::get('contact',[homeController::class,'contact'])->name('contact');
});
