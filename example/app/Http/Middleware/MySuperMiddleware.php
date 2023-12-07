<?php

namespace App\Http\Middleware;

use Closure;

class MySuperMiddleware
{
    public function handle($request, Closure $next)
    {
        $name = $request->input('name');

        if ($name !== 'my-super-middleware') {
            // Redirect to the error page
            return redirect()->route('error.page');
        }

        return $next($request);
    }
}