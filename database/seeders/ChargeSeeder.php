<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('charges')->truncate();
        $data = [
            ['description' => 'APC'],
            ['description' => 'JEFE DE ZONA'],
        ];
        DB::table('charges')->insert($data); 
    }
}
