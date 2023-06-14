<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class UserMiddleware
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
        if (Auth::check() && Auth::user()->role == 2) {
            return redirect(RouteServiceProvider::HOME);
        } else {
            Notify::error("You dont have permission to access this page. Please login to as a User", 'Need Login');
            return "login";
        }
        return $next($request);
    }
}
