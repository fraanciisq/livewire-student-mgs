<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if ($request->user()->email !== 'fraanciisq@gmail.com') {
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}