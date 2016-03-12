<?php

namespace App\Http\Middleware;

use App;
use Session;
use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = 'es';

        if (Session::Has('locale')) {
            $locale = Session::get('locale');
            if ($locale != 'en' && $locale != 'es') {
                $locale = 'es';
                Session::set('locale', $locale);
            }
        } else {
            Session::set('locale', $locale);
        }

        App::setLocale($locale);

        return $next($request);
    }
}
