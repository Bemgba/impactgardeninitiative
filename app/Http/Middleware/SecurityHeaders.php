<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Adds HTTP security headers to every response.
 * These complement the headers set in public/.htaccess.
 */
class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set('X-Content-Type-Options',    'nosniff');
        $response->headers->set('X-Frame-Options',           'SAMEORIGIN');
        $response->headers->set('X-XSS-Protection',          '1; mode=block');
        $response->headers->set('Referrer-Policy',           'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy',        'camera=(), microphone=(), geolocation=()');

        /* Content-Security-Policy — tightened for an information site.
           Adjust 'script-src' if you add third-party analytics later. */
        $csp = implode('; ', [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline'",          // Vite inline scripts
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com",
            "font-src 'self' https://fonts.gstatic.com",
            "img-src 'self' data: https://images.unsplash.com https://placehold.co",
            "connect-src 'self'",
            "frame-ancestors 'none'",
            "base-uri 'self'",
            "form-action 'self'",
        ]);
        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}
