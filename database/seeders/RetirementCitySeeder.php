<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RetirementCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['description' => 'BOGOTÁ'],
            ['description' => 'CALI'],
            ['description' => 'BARRANQUILLA'],
            ['description' => 'IBAGUE'],
            ['description' => 'MEDELLIN'],  
            ['description' => 'BUCARAMANGA'],  
            ['description' => 'CARTAGENA'],  
            ['description' => 'ARMENIA'],  
        ];
        DB::table('retirement_cities')->insert($data); 
    }
}
