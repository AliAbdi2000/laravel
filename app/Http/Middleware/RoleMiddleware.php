<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
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
        //return redirect('/login');
        //return $next($request);

        if (Auth::check()){
              $user=Auth::user();
            if ($user->isAdmin()){
                echo 'u r admin';
            }else{
                echo 'u r not admin';
            }
        }
    }
}