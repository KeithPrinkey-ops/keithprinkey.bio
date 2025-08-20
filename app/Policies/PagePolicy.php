<?php

namespace App\Policies;

use App\Models\Page;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->hasRole('super-admin');
    }

    public function view(User $user, Page $page): bool
    {
        return $user->hasRole('user');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('super-admin');
    }

    public function update(User $user, Page $page): bool
    {
        return $user->hasRole('super-admin');
    }

    public function delete(User $user, Page $page): bool
    {
        return $user->hasRole('super-admin');
    }

    public function restore(User $user, Page $page): bool
    {
        return $user->hasRole('super-admin');
    }

    public function forceDelete(User $user, Page $page): bool
    {
        return $user->hasRole('super-admin');
    }
}
