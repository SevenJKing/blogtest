<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;

class LangMiddleware
{ 
    protected $lang;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct( )
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(session('localLang'))||$request->has('lang')) {
            $lang=$request->has('lang')?$request->lang:'zh'; 
            Session::put('localLang',$lang);  
        }
        return $next($request);
    }
}
