<?php

namespace App\Http\Middleware;

use Closure;
use CRUDBooster;
class MyAuth
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
        if (!CRUDBooster::myId()) {
            return redirect('login')->with('danger' , 'الرجاء تسجيل الدخول للاستمرار 💘');
        }

        return $next($request);
    }
}
