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

        return true;
        // return $user->getRoleName() === 'admin' || $user->getRoleName() === 'manager';
    }



    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Level $level): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'manager']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Level $level): bool
    {
        return $user->hasAnyRole(['admin', 'manager']) || $level->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Level $level): bool
    {
        return $user->hasAnyRole(['admin', 'manager']);
    }



    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Level $level): bool
    {
        return $user->hasAnyRole(['admin', 'manager']);
    }
}
