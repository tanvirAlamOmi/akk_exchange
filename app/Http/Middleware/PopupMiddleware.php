<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class PopupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $popup = popupInfo();

        // Check if the current date is before the popup's expiration date
        $now = now()->format('Y-m-d');
        $expiration_date = $popup['expire_date'] ?? null;

        if (!$expiration_date || $now > $expiration_date) {
            return $next($request);
        }

        view()->share('popup', $popup);

        return $next($request);
    }
}
