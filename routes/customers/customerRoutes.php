<?php

use Illuminate\Support\Facades\Route;

// Call the controller
use App\Http\Controllers\web\customer\cartController;

Route::resource('cart', cartController::class);
