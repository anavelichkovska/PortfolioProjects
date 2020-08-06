<?php

namespace App\Http\Middleware;

use Closure;

class checkUserRole
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
        if(\Auth::user()->role == 'admin')
        {
            return redirect('/admin/posts');
        } else {
            return redirect('/guest/posts');
        }
        return $next($request);
    }
}
