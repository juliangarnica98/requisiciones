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
        $role_gerente = Role::create(['name'=>'Gerente']);
        $role_director = Role::create(['name'=>'Director']);
        $role_generalist = Role::create(['name'=>'Generalist']);
        $role_recruiter = Role::create(['name'=>'Recruiter']);
        $role_generalist_comercial = Role::create(['name'=>'Generalist_comercial']);
        $role_specialist = Role::create(['name'=>'Specialist']);
        
        Permission::create(['name'=>'admin.index'])->assignRole($role_admin);
        Permission::create(['name'=>'boss.index'])->assignRole($role_boss);
        Permission::create(['name'=>'director.index'])->assignRole($role_director);
        Permission::create(['name'=>'gerente.index'])->assignRole($role_gerente);
        Permission::create(['name'=>'generalist.index'])->assignRole($role_generalist);
        Permission::create(['name'=>'recruiter.index'])->assignRole($role_recruiter);
        Permission::create(['name'=>'generalist_comercial.index'])->assignRole($role_generalist_comercial);
        Permission::create(['name'=>'specialist.index'])->assignRole($role_specialist);
    }
}
