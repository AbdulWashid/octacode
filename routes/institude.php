<?php

Route::prefix('institude')->name('institude.')->group(function(){
    Route::get('index',function(){
        return view('inst.index');
    })->name('index');
});
