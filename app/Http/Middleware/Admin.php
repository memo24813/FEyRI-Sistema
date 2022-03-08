<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    const USER_TYPE = 'admin';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(auth()->user())
        {
            if(auth()->user()->user_type === 'admin')
            {
                return $next($request);
            }
        }

        return redirect('/dashboard');
    }
}
