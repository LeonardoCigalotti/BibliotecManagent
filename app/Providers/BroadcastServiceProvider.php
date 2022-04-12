<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
