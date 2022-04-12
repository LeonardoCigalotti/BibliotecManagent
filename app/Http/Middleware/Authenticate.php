<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
<<<<<<< HEAD
            return route('login');
=======
            return '/entrar';
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        }
    }
}
