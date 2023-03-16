<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    //phân quyền đăng nhập
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
           if ( Auth::user()->is_admin == 1){
               return $next($request);
           }
           return  redirect()->route('admin.auth.login')->with('error' ,'Yêu cầu đã bị từ chối');
        }
        //k login cung tra ve
        return  redirect()->route('admin.auth.login')->with('error' ,'Yêu cầu đã bị từ chối');
    }
}
