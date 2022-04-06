<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
<<<<<<< HEAD
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
=======
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
     */
    protected $except = [
        //
    ];
}
