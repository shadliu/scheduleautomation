<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 1) {
            return $next($request);
        } else {
            Notify::error("You dont have permission to access this page. Please login to as a admin", 'Error');
            return redirect('/login');
        }
    }
}
