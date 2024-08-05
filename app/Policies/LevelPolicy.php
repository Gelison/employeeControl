<?php

namespace App\Policies;

use App\Models\Level;
use App\Models\User;
use GuzzleHttp\Psr7\Response;

class LevelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool


    {


        return $user->name === 'Admin';

        // return false;
        // return $user->hasAnyRole($roles) == 'admin';

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Level $level): bool
    {
        return $user->name === 'Admin';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->name == 'Admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Level $level): bool
    {
        return $user->name == 'Admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Level $level): bool
    {
        // return $user->id == $user->isAdmin();
    }

   

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Level $level): bool
    {
        return $user->name === 'Admin';
    }
}
