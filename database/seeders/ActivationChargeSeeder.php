<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivationChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('activation_charges')->truncate();
        $data = [
            ['description' => 'DESARROLLADOR'],
            ['description' => 'GERENTE DE GESTION HUMANA'],
            ['description' => 'DBA'],
            ['description' => 'JEFE DE GESTIÓN HUMANA'],
            ['description' => 'ANALISTA DE SELECCIÓN'],  
            ['description' => 'OPERARIO 1'],  
            ['description' => 'MONTACARGUISTA'],  
            ['description' => 'OPERARIO2'],  
        ];
        DB::table('activation_charges')->insert($data); 
    }
}
