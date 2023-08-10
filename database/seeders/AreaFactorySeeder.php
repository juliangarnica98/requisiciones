<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('area_factories')->truncate();
        $data = [
            ['description' => 'OPERATIVO'],
            ['description' => 'ADMINISTRATIVO'],
        ];
        DB::table('area_factories')->insert($data); 
    }
}
