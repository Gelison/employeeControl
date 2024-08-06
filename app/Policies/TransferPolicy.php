<?php

namespace App\Policies;

use App\Models\Transfer;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TransferPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Transfer $transfer): bool
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
    public function update(User $user, Transfer $transfer): bool
    {
        return $user->hasAnyRole(['admin', 'manager']) || $transfer->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Transfer $transfer): bool
    {
        return $user->hasAnyRole(['admin', 'manager']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Transfer $transfer): bool
    {
        return $user->hasAnyRole(['admin', 'manager']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Transfer $transfer): bool
    {
        return $user->hasAnyRole(['admin', 'manager']);
    }
}