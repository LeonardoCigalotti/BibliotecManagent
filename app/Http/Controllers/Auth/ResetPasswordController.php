<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $redirectTo = RouteServiceProvider::HOME;
=======
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
}
