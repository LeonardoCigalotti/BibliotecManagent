<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
=======
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
<<<<<<< HEAD
     * @var array<class-string, array<int, class-string>>
=======
     * @var array
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
=======
        parent::boot();

>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        //
    }
}
