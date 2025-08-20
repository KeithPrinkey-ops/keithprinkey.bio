<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create contact']);
        Permission::create(['name' => 'view contact']);
        Permission::create(['name' => 'edit contact']);
        Permission::create(['name' => 'delete contact']);
        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'view post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);
        Permission::create(['name' => 'viewAny']);

        // Reset cache if using WithoutModelEvents in seeders
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles
        $roleWriter = Role::create(['name' => 'writer']);
        $roleWriter->givePermissionTo(['create post', 'edit post', 'delete post', 'create post', 'viewAny', 'create contact']);

        $roleModerator = Role::create(['name' => 'moderator']);
        $roleModerator->givePermissionTo(['view contact', 'delete contact']);

        $roleSuperAdmin = Role::create(['name' => 'super-admin']);
        $roleSuperAdmin->givePermissionTo(Permission::all());
    }
}
