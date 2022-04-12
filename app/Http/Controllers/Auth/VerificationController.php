<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
