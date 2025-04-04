<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $Operator = Role::create(['name' => 'Operator']);

        $superAdmin->givePermissionTo([
                'create-role',
                'edit-role',
                'delete-role',
                'create-user',
                'edit-user',
                'delete-user',
                'create-product',
                'edit-product',
                'delete-product'
            ]);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product'
        ]);
        $Operator->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);
    }
}
