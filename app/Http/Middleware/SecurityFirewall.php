<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityFirewall
{
    public function handle(Request $request, Closure $next)
    {
        // 1. Check the RAW Request URI for '?=' regardless of what Laravel's parser sees
        // This catches ?=, ?=dad, ?=c, etc.
        if (str_contains($request->getRequestUri(), '?=')) {
            abort(404);
        }

        // 2. Kill trailing empty question marks
        if (str_ends_with($request->fullUrl(), '?')) {
            abort(404);
        }

        // 3. Whitelist your legitimate 'page' parameter for the blog
        if (!empty($request->query())) {
            $allowedKeys = ['page'];
            foreach ($request->query() as $key => $value) {
                if (!in_array($key, $allowedKeys)) {
                    abort(404);
                }
            }
        }

        return $next($request);
    }

}
