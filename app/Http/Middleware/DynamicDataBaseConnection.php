<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class DynamicDataBaseConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $user = auth()->user();

        if (Auth::user()) {
            if (Session::has('dataBaseName')) {
                if ($user->rol_id==1) {
                    
                    $connection = 'dynamic_connection';
                    Config::set('database.connections.' . $connection . '.database', Session::get('dataBaseName'));
                    Config::set('database.connections.' . $connection . '.username', Session::get('userName'));                
                    Config::set('database.default', $connection);
                        
                    
            
                    return $next($request);
                }
            }
            
            if ($user->rol->id>1) {
                $connection = 'dynamic_connection';
                Config::set('database.connections.' . $connection . '.database', $user->compania->database_name);
                Config::set('database.connections.' . $connection . '.username', $user->compania->user_name);           
                Config::set('database.default', $connection);
            }
    
        }
        
        

        return $next($request);

    }
}
