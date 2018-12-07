<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;//Thư viện hỗ trợ đăng nhập
use Closure;

class UserLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            return $next($request);
        }
        else return redirect('/');
    }
}
