<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class user
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
    if (Auth::check() && Auth::user()->role == 'user') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->role == 'semployee') {
        return redirect('/semployee');
    }
    elseif (Auth::check() && Auth::user()->role == 'shead') {
        return redirect('/shead');
    }
    else {
        return redirect('/ihead');
    }
}
}
