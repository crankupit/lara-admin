<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;

class StartAdminSession extends StartSession
{
    /**
     * The name of the cookie used to store the session ID.
     *
     * @var string
     */
    protected $sessionName = 'admin_session';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        config(['session.connection' => 'admin']);
        return parent::handle($request, $next);
    }
}
