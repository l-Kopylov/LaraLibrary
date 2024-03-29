<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('modify-post', function (User $user, Book $book) {
            return $user->id === $book->user_id;
        });
        
        Gate::define('access-route', function ($user) {
            return $user->id === 1;
        });

        Gate::before(function ($user) {
            if ($user->id === 1) {
                return true;
            }
        });

    }
}
