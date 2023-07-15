<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(Gate $gate): void
    {
        $this->registerPolicies();

        $gate->define('mhs', function (User $user) {
            return $user->role === 0;
        });

        $gate->define('kjr', function (User $user) {
            return $user->role === 1;
        });

        $gate->define('apd', function (User $user) {
            return $user->role === 2;
        });

        $gate->define('ata', function (User $user) {
            return $user->role === 3;
        });

        $gate->define('keu', function (User $user) {
            return $user->role === 4;
        });

        $gate->define('prp', function (User $user) {
            return $user->role === 5;
        });
    }



}
