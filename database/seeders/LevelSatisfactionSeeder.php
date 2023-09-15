<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSatisfactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['description' => 'INSATISFECHO'],
            ['description' => 'SATISFECHO'],
            ['description' => 'TOTALMENTE SATISFECHO'],
        ];
        DB::table('level_satisfactions')->insert($data); 
    }
}
