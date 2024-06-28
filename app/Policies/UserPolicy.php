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

    public function verif(User $user)
    {
        return $user->role_id == '1' ? true : false;
    }
}
