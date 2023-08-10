<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name'=>'Admin']);
        $role_boss = Role::create(['name'=>'Boss']);
        
        Permission::create(['name'=>'admin.index'])->assignRole($role_admin);
        Permission::create(['name'=>'boss.index'])->assignRole($role_boss);

    }
}
