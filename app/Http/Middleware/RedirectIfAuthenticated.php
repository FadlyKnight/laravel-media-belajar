<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            $user = Auth::user();
            switch ($user->role) {
                case 'siswa':
                    return redirect()->route('siswa.home');
                    break;
                case 'guru':
                    return redirect()->route('guru.home');
                    break;
                case 'admin':
                    return redirect()->route('admin.home');
                    break;
                
                default:
                    abort(404,'INVALID ROLE');
                    break;
            }
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
