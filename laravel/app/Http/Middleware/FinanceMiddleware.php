<?php

namespace App\Http\Middleware;


use Closure;
use http\Env\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class FinanceMiddleware
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

        if ($request->user() && $request->user()->department === 'finance')

        {

            return $next($request);

        }

        return redirect('/'.Auth::user()->department);

    }
}
