<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('loged_admin') && $request->path() !='loginAdmin' ) {
            return redirect('loginAdmin')->with('fill','تحتاج الي تسجيل الدخول اولا');
        }
        if (session()->has('loged_admin') && $request->path() =='loginAdmin' ) {
            return back();
        }
        return $next($request)->header('Cache-control','no-cache,no-store ,max-age=0 , must-revalidate')
                              ->header('Pragma', 'no-cache')  
                              ->header('Expires','Sat 01 jan 1990 00.00.00 GMT');
    }
}
