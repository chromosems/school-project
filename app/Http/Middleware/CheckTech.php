<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkTech
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       /*
       these calls for the names of the users
       */
        $userRoles = Auth::user()->roles->pluck('name');
        /*
         * if it does not contain admin return home
         */
        if  (!$collection->contains('Tech')){
           return redirect('/home');
        }
        return $next($request);
    }
}
