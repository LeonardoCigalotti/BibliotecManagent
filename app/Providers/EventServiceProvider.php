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
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
<<<<<<< HEAD
     * @var array<class-string, array<int, class-string>>
=======
     * @var array
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
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

>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
        //
    }
}
