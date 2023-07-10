<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
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
    public function boot(): void
    {
        //
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role > 0) {
                $profile = $user->staff;
            } else {
                $profile = $user->student;
            }

            view()->composer('*', function ($view) use($profile) {
                $view->with('profile', $profile);
            });
        }

    }
}
