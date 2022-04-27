<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class authCustom
{
     public function handle($request, Closure $next)
    {
        session_start();
    
        if(!isset($_SESSION['logged'])) {
            return Redirect::to('login.php');
        }
        
        return $next($request);
    }
}
