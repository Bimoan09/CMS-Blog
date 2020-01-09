<?php

namespace App\Http\Middleware;

use Closure;

class AdminType
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
        $admin = \Auth::user();
        if($admin->user_type != 'internaladmin'){
            return redirect()->back()->with('danger', 'Anda tidak punya akses');
        }
        return $next($request);
    }
}
