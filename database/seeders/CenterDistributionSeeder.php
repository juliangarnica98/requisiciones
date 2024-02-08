<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterDistributionSeeder extends Seeder
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
            ['description' => 'CANAIMA'],
            ['description' => 'SIBERIA'],
        ];
        DB::table('center_distributions')->insert($data); 
    }
}
