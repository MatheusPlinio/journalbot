<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'editor']);
        $client = Role::firstOrCreate(['name' => 'client']);

        $permissions = [
            'view articles',
            'create articles',
            'edit articles',
            'delete articles',
            'send broadcasts',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        $admin->givePermissionTo(Permission::all());
        $editor->givePermissionTo(['view articles', 'create articles', 'edit articles']);
        $client->givePermissionTo(['view articles']);
    }
}
