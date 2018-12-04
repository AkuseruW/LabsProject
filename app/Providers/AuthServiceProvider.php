<?php

namespace App\Providers;

use App\User;
use App\Article;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function (User $user, Article $article) {
            if ($user->roles_id == 1) {
                return true;
            } else {
                return $user->id == $article->user_id;
            }
        });

        Gate::define('admin', function (User $user) {
            if ($user->roles_id == 1) {
                return true;
            }
        });

        Gate::define('notGuest', function (User $user)
        {
            if ($user->roles_id != 3) {
                return true;
            }
        });

        Gate::define('editeur', function (User $user, Article $article) {
            if ($user->roles_id == 1) {
                return true;
            } elseif ($user->roles_id == 2) {
                return $user->id == $article->user_id;
            } else {
                return false;
            }
        });


    }
}
