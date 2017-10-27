<?php

namespace App\Http\Middleware;

use Illuminate\Session\Middleware\StartSession;
use Closure;
use Session;
use Config;
use App;

class LanguageMiddleware
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
        
        if (Session::has('locale') AND array_key_exists(Session::get('locale'), Config::get('languages'))) {
            App::setLocale(Session::get('locale'));
            
        }
        else {
        // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(Config::get('app.fallback_locale'));
            
        }
        /*
        if(!Session::has('locale'))
        {
            Session::put('locale', config('app.fallback_locale'));
        }
        app()->setLocale(Session::get('locale'));
*/
        return $next($request);
    }
}
