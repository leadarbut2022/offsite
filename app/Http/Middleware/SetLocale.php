<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;

class SetLocale
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

     if (!isset($_SESSION['locale'])){
        $locale = session('locale','en');
     }
     $locale = session('locale');
        app()->setLocale($locale);

        //   // تعيين اللغة الافتراضية إلى اللغة الإنجليزية
        //   $locale = 'en';

        //   // التحقق من وجود لغة محددة في جلسة المستخدم
        //   if (Session::has('locale')) {
        //       $locale = Session::get('locale');
        //   }
      
        // app()->setLocale($request->segment(1));
        return $next($request);
    }
}
