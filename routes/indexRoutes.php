<?php

use Illuminate\Support\Facades\Route;

// Call the controller
use App\Http\Controllers\web\dashboard\{
    dashboardController
};

use App\Http\Controllers\web\customer\{
    indexController,
    aboutController,
    menuController,
};

Route::resource('/', indexController::class);
Route::resource('about', aboutController::class);
Route::resource('menuCustomer', menuController::class);

Route::group(['prefix' => '{role}', 'as' => 'role.'], function () {
    Route::resource('dashboard', dashboardController::class);
})->middleware('auth');

