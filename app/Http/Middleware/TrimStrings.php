<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
<<<<<<< HEAD
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
=======
     * @var array
     */
    protected $except = [
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        'password',
        'password_confirmation',
    ];
}
