<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            ['name' => 'Administrador',
            'last_name' => 'Admin',
            'email'=>'admin@fastmoda.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Admin');
        
    }
}

