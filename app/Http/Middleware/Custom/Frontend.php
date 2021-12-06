<?php

namespace App\Http\Middleware\Custom;

use App\Helpers\Qs;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Frontend
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
        return (Auth::check() && Qs::userIsSuperAdmin()) ? $next($request) : redirect()->route('login');
    }
}
