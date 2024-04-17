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

        User::create(
            ['name' => ' JERSON OCTAVIO',
            'last_name' => 'RINCON ALDANA',
            'area'=> 3,
            'email'=>'jersonjo5ra@hotmail.com', 
            'password' => Hash::make('1019136775')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' FREDY ALEXANDER',
            'last_name' => 'TORRES CASTILLO',
            'area'=> 4,
            'email'=>'fredytorrescastillo1982@outlook.com', 
            'password' => Hash::make('74754552')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' MARIA ODILIAR',
            'last_name' => 'JIMENEZ RICAURTE',
            'area'=> 3,
            'email'=>'ma.odi.jimz89@gmail.com', 
            'password' => Hash::make('1106363042')]
        )->assignRole('Boss');





        User::create(
            ['name' => ' LEIDY JOHANA',
            'last_name' => 'RIOS DURAN',
            'area'=> 4,
            'email'=>'leyla490@outlook.com', 
            'password' => Hash::make('1022931820')]
        )->assignRole('Boss');

        User::create(
            ['name' => '  KATY LILI',
            'last_name' => 'CHAPARRO VEGA',
            'area'=> 3,
            'email'=>'criminologokaty@gmail.com', 
            'password' => Hash::make('1126427906')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' LUIS EDUARDO',
            'last_name' => 'GRISALES MAYORGA',
            'area'=> 4,
            'email'=>'lucho771212@hotmail.com', 
            'password' => Hash::make('79760022')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'RODRIGO ANDRES',
            'last_name' => 'PARDO OCTAVIO',
            'area'=> 3,
            'email'=>'1069717266ro@gmail.com', 
            'password' => Hash::make('1069717266')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'CRISTIAN ANTONIO',
            'last_name' => 'CARRILLO LOPEZ ',
            'area'=> 4,
            'email'=>'C_afi17@hotmail.com', 
            'password' => Hash::make('1012383529')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'SENAIDA',
            'last_name' => 'GONZALEZ NIETO',
            'area'=> 4,
            'email'=>'senaidagonzalez26@gmail.com', 
            'password' => Hash::make('1026587422')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'IVAN DARIO',
            'last_name' => 'MORENO RIAÑO',
            'area'=> 3,
            'email'=>'ivanmorenosa7@gmail.com', 
            'password' => Hash::make('1233902198')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'RONAL STEVEN',
            'last_name' => 'CAMACHO ROMERO',
            'area'=> 3,
            'email'=>'ronalcamacho.7@gmail.com', 
            'password' => Hash::make('1193221169')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' LUIS ALEJANDRO',
            'last_name' => 'ROMERO CEPEDA',
            'area'=> 3,
            'email'=>'luis.cepedasee@gmail.com', 
            'password' => Hash::make('1032470231')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' PAULA CAROLINA',
            'last_name' => 'GALINDO PRIETO ',
            'area'=> 3,
            'email'=>'galindopaulacarolina@gmail.com', 
            'password' => Hash::make('1014303103')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JUAN CARLOS ',
            'last_name' => 'MONTENEGRO ',
            'area'=> 3,
            'email'=>'juan.montenegro@fastmoda.com.co', 
            'password' => Hash::make('79908163')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'NATALY ALBA ',
            'last_name' => 'MATALLANA',
            'area'=> 3,
            'email'=>'nataly.alba@fastmoda.com.co', 
            'password' => Hash::make('1014188092')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' Indira ',
            'last_name' => 'Rivera Ortiz',
            'area'=> 4,
            'email'=>'indira.rivera@fastmoda.com.co', 
            'password' => Hash::make('52482473')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'Yesid ',
            'last_name' => 'Rojas Carreño',
            'area'=> 3,
            'email'=>'yesid.rojas@fastmoda.com.co', 
            'password' => Hash::make('79651980')]
        )->assignRole('Boss');
    }
}

