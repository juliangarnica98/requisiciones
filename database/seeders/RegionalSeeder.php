<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('regionals')->truncate();
        $data = [
            ['description' => 'REGIONAL ANTIOQUIA Y SANTANDER'],
            ['description' => 'REGIONAL COSTA'],
            ['description' => 'REGIONAL CENTRO NORTE'],
            ['description' => 'REGIONAL SUR'],
            ['description' => 'REGIONAL CENTRO SUR'],  
        ];
        DB::table('regionals')->insert($data); 
    }
}
