<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('com.index');
});


Route::get('admin',function(){
    return view('admin.index');
});

Route::get('class',function(){
    return view('inst.index');
});