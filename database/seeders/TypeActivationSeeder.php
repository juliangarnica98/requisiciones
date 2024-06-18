<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeActivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('type_activations')->truncate();
        $data = [
            ['description' => 'REEMPLAZO (VACANTE)'],
            ['description' => 'PLAN DE CAMBIO'],
            ['description' => 'NUEVO CARGO/TEMPORADA'],
            ['description' => 'REINTEGRO'],
            ['description' => 'APERTURA DE TIENDA'],
            ['description' => 'CRECIMIENTO'],  
            ['description' => 'INCAPACIDAD/LICENCIA'],  
        ];
        DB::table('type_activations')->insert($data); 
    }
}
