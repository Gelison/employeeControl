<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Division;
use App\Models\Doctype;
use App\Models\Level;
use App\Models\Position;
use App\Models\User;
use App\Policies\DivisionPolicy;
use App\Policies\DoctypePolicy;
use App\Policies\LevelPolicy;
use App\Policies\PositionPolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Level::class => LevelPolicy::class,
        Division::class=>DivisionPolicy::class,
        Doctype::class =>DoctypePolicy::class,
        Position::class=>PositionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
