<?php
/**
 * Created by PhpStorm.
 * User: Clayton
 * Date: 17/11/2016
 * Time: 17:16
 */

namespace CodeCommerce\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('auth/login');
        }
        if (Auth::user()->is_admin != 1) {
            return redirect()->route('home.path');
        }
        return $next($request);
    }
}