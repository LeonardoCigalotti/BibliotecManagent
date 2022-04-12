<?php

namespace App\Exceptions;

<<<<<<< HEAD
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
=======
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
<<<<<<< HEAD
     * @var array<int, class-string<Throwable>>
=======
     * @var array
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
<<<<<<< HEAD
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
=======
     * @var array
     */
    protected $dontFlash = [
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        'password',
        'password_confirmation',
    ];

    /**
<<<<<<< HEAD
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
=======
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
    }
}
