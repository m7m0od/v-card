<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Profile;
use App\Policies\ProfilePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //Profile::class => 'App\Policies\ProfilePolicy',
       ProfilePolicy::class
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
