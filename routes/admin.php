<?php
use App\Http\Controllers\admin\
                            {
                                homeController,
                                LoginController,
                                ContactController
                            };

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('form-submit', [LoginController::class, 'form_submit'])->name('form_submit');

    Route::middleware('auth')->group(function () {
        Route::get('/', [homeController::class, 'index'])->name('dashboard');
        
        Route::get('contact',[ContactController::class,'contact'])->name('contact');
        Route::get('contact-detail/{id}',[ContactController::class,'contact_detail'])->name('contact-detail');
        Route::get('contact_status/{id}',[ContactController::class,'contact_status'])->name('contact_status');
    });
});
