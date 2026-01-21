<?php

        namespace App\Policies;

        use App\Models\ServiceCategory;
        use App\Models\User;
        use Illuminate\Auth\Access\HandlesAuthorization;

        class ServiceCategoryPolicy
        {
            use HandlesAuthorization;

            public function viewAny(User $user): bool
            {
                return true;
            }

            public function view(User $user, ServiceCategory $serviceCategory): bool
            {
                return true;
            }

            public function create(User $user): bool
            {
                return $user->is_admin ?? false;
            }

            public function update(User $user, ServiceCategory $serviceCategory): bool
            {
                return $user->is_admin ?? false;
            }

            public function delete(User $user, ServiceCategory $serviceCategory): bool
            {
                return $user->is_admin ?? false;
            }

            public function restore(User $user, ServiceCategory $serviceCategory): bool
            {
                return $user->is_admin ?? false;
            }

            public function forceDelete(User $user, ServiceCategory $serviceCategory): bool
            {
                return $user->is_admin ?? false;
            }
        }
