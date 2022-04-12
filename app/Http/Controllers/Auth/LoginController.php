<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $redirectTo = RouteServiceProvider::HOME;
=======
    protected $redirectTo = '/home';
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
