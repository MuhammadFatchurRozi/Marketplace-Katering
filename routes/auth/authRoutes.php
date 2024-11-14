<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Auth::routes();

// force logout
Route::get('forceLogout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('my-profile', [LoginController::class, 'myProfile'])->name('my-profile');
Route::PUT('update-profile/{id}', [LoginController::class, 'updateProfile'])->name('update-profile');