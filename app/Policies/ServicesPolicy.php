<?php

namespace App\Policies;

use App\Models\Services;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicesPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Services $services): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->is_admin ?? false;
    }

    public function update(User $user, Services $services): bool
    {
        return $user->is_admin ?? false;
    }

    public function delete(User $user, Services $services): bool
    {
        return $user->is_admin ?? false;
    }

    public function restore(User $user, Services $services): bool
    {
        return $user->is_admin ?? false;
    }

    public function forceDelete(User $user, Services $services): bool
    {
        return $user->is_admin ?? false;
    }
}
