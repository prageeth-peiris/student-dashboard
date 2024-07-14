<?php

namespace App\Policies;

use App\Enums\Roles;
use App\Models\User;
use Couchbase\Role;

class AdminPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function viewAny(User $user){
        return $user->role == Roles::ADMIN->value;
    }
}
