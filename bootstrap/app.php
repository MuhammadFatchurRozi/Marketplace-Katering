<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

// call middleware
use App\Http\Middleware\Authenticate;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        using: function () {
            Route::middleware('web')
                ->group(base_path('routes/indexRoutes.php'));
            
                Route::middleware('web')
                ->group(base_path('routes/auth/authRoutes.php'));

                Route::middleware('web', 'auth')
                ->prefix('merchant')
                ->group(base_path('routes/merchant/merchantRoutes.php'));

            Route::middleware('web', 'auth')
                ->prefix('customer')
                ->group(base_path('routes/customers/customerRoutes.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->alias([
        //     'maintenance' => CheckForMaintenanceMode::class,
        //     'security' => SetSecurityHeaders::class,
        // ]);

        // // Disable CSRF token validation for stripe webhooks
        // $middleware->validateCsrfTokens(except: [
        //     'stripe/*',
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
