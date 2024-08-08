<?php

namespace App\Providers;

use App\Http\Resources\EducationResource;
use App\Repositories\CertificationInterface;
use App\Repositories\CertificationRepository;
use App\Repositories\DivisionInterface;
use App\Repositories\DivisionRepository;
use App\Repositories\DoctypeInterface;
use App\Repositories\DoctypeRepository;
use App\Repositories\EducationInterface;
use App\Repositories\EducationRepository;
use App\Repositories\LevelInterface;
use App\Repositories\LevelRepository;
use App\Repositories\PositionInterface;
use App\Repositories\PositionRepository;
use App\Repositories\SubstitutionInterface;
use App\Repositories\SubstitutionRepository;
use App\Repositories\TransferInterface;
use App\Repositories\TransferRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->app->bind(CertificationInterface::class, CertificationRepository::class);
        $this->app->bind(DivisionInterface::class, DivisionRepository::class);
        $this->app->bind(DoctypeInterface::class, DoctypeRepository::class);
        $this->app->bind(EducationInterface::class, EducationRepository::class);
        $this->app->bind(LevelInterface::class, LevelRepository::class);
        $this->app->bind(PositionInterface::class, PositionRepository::class);
        $this->app->bind(SubstitutionInterface::class, SubstitutionRepository::class);
        $this->app->bind(TransferInterface::class, TransferRepository::class);
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
