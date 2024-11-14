<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetSecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
     * @return \Illuminate\Http\Response   

     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Contoh header keamanan yang umum digunakan
        $response->headers->set('X-Frame-Options', 'DENY'); // Mencegah clickjacking
        $response->headers->set('X-XSS-Protection', '1; mode=block'); // Mencegah XSS
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains'); // HSTS
        $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self'; connect-src 'self'; media-src 'self'; object-src 'none'; frame-src 'none'; base-uri 'self'; form-action 'self'; frame-ancestors 'none';"); // CSP
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin'); // Referrer Policy

        // Tambahkan header keamanan lainnya sesuai kebutuhan
        // ...

        return $response;
    }
}
