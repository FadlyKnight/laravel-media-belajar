<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check()) {
            $myrole = Auth::user()->role; 
            if ($role == $myrole) {
                return $next($request);
            }
            abort('403',' Tidak Ada Akses');
        } else {
            return redirect()->route('login')->with('error','Belum Login');
        }
    }
}
