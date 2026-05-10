<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-admin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('is-editor', function ($user) {
            return in_array($user->role, ['admin', 'editor']);
        });

        Gate::define('is-jornalista', function ($user) {
            return in_array($user->role, ['admin', 'editor', 'jornalista']);
        });

        Gate::define('is-assinante', function ($user) {
            return $user->role === 'assinante';
        });
        
    }
}
