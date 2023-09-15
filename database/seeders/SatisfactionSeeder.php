<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatisfactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['description' => 'HOMBRE'],
            ['description' => 'MUJER'],
            ['description' => 'INDIFERENTE'],
        ];
        DB::table('sexes')->insert($data); 
    }
}
