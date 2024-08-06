<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;


use App\Models\Certification;
use App\Models\Division;
use App\Models\Doctype;
use App\Models\Education;
use App\Models\Level;
use App\Models\Position;
use App\Models\Substitution;
use App\Models\Transfer;
use App\Models\User;
use App\Policies\CertificationPolicy;
use App\Policies\DivisionPolicy;
use App\Policies\DoctypePolicy;
use App\Policies\EducationPolicy;
use App\Policies\LevelPolicy;
use App\Policies\PositionPolicy;
use App\Policies\SubstitutionPolicy;
use App\Policies\TransferPolicy;
use App\Policies\UserPolicy;
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
        Certification::class=>CertificationPolicy::class,
        Education::class=>EducationPolicy::class,
        Substitution::class=>SubstitutionPolicy::class,
        Transfer::class=>TransferPolicy::class,
        User::class=>UserPolicy::class,


    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
