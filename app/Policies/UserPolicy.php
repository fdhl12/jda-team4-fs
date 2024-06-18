<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
    }

    public function verif(User $authUser, User $user)
    {
        return $authUser->role_id === '1' || $authUser->id === $user->id;
    }
}
