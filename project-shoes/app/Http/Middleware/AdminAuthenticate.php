<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //    if(Auth::check() && Auth::user()->role == 1){
    //        return $next($request);

    //    }
    //    return redirect()->route('admin.login');
    // }
    // public function handle(Request $request, Closure $next)
    // {
    //    if(!Auth::check()){
    //        return redirect()->route('admin.login');

    //    }
    //     $user = Auth::user();
    //    $route = $request->route()->getName();
    //    dd($user->can($route));
       
    //    return $next($request);
    // }
}
