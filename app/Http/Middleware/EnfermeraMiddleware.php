<?php

namespace App\Http\Middleware;

use Closure;

class EnfermeraMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {

        switch ($this->auth->user()->is_admin) {
            case '1':
                #AdminMiddleware
                return redirect()->to('home');
                break;
            case '2':
                #Enfermera
               // return redirect()->to('home');
                break;
            default:
                return redirect()->to('login');
                return $next($request);
        }
    }
}
