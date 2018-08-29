<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class shead
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
    if (Auth::check() && Auth::user()->role == 'shead') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->role == 'semployee') {
        return redirect('/semployee');
    }
    elseif (Auth::check() && Auth::user()->role == 'user') {
        return redirect('/user');
    }
    else {
        return redirect('/ihead');
    }
}
}
