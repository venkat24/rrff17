<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Log;
use Sangria\JSONResponse;

class SessionCheck
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
        $email = Session::get('user_email');
        if($email)
            return $next($request);
        else {
            $status_code = 401;
            $message = "Session expired. Please login again.";
            Log::info('Logged out');
            Session::flush();
            return redirect('/login');
        }
    }
}
