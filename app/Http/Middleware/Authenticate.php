<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @return string|null
=======
     * @return string
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
<<<<<<< HEAD
            return route('login');
=======
            return '/entrar';
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
        }
    }
}
