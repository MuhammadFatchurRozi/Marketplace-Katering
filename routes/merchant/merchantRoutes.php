<?php

use Illuminate\Support\Facades\Route;

// Call the controller
use App\Http\Controllers\web\dashboard\menu\menuController;
use App\Http\Controllers\web\dashboard\order\orderController;

Route::resource('menu', menuController::class);
Route::resource('order', orderController::class);
