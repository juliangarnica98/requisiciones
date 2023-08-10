<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cities')->truncate();
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
        DB::table('cities')->insert($data); 
    }
}
