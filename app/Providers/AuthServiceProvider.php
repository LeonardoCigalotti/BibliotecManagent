<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
=======
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
<<<<<<< HEAD
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
