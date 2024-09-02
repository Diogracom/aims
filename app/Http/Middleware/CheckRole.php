<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::User();
        if($user){
            switch($user->role){
                case 'User':
                    return redirect()->route('pages.dashboard');
                //case 'Admin':
                //    return redirect()->route('pages.dashboard');
                default:
                    return redirect()->route('login');
            }
        }
        return $next($request);
    }
}
