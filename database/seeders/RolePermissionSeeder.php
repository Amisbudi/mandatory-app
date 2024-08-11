<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'index asset statuses',
            'show asset statuses',
            'create asset statuses',
            'edit asset statuses',
            'delete asset statuses',
            'index user',
            'show user',
            'create user',
            'edit user',
            'delete user',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $roles = [
            'admin' => [
                'index asset statuses',
                'show asset statuses',
                'create asset statuses',
                'edit asset statuses',
                'delete asset statuses',
                'index user',
                'show user',
                'create user',
                'edit user',
                'delete user',
            ],
            'user' => [
                'index asset statuses',
                'show asset statuses'
            ]
        ];

        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($rolePermissions);
        }
    }
}
