<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\com\{
    homeController,
    contactController
};

Route::get('/',[homeController::class,'index']);
Route::get('/contact',[contactController::class,'index'])->name('contactPage');
Route::POST('contact-data',[contactController::class,'contactData'])->name('contactData');

require __DIR__."/admin.php";
require __DIR__."/institude.php";