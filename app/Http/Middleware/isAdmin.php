<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
use Auth;

class isAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::has('RouletteCasinoAdmin*%') && Auth::guard('admin')->user() && Auth::guard('admin')->user()->status == 'active'){     
            return $next($request);
        }
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
