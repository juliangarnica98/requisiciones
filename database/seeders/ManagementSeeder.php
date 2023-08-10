<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('managements')->truncate();
        $data = [
            ['description' => 'GESTIÓN HUMANA'],
            ['description' => 'COMERCIAL'],
            ['description' => 'EXPANSIÓN Y VISUAL'],
            ['description' => 'MERCADEO Y PRODUCTO DIGITAL'],
            ['description' => 'OPERACIONES'],  
            ['description' => 'FINANCIERA'],  
            ['description' => 'GERENCIA GENERAL'],  
            ['description' => 'UNIQ'],  
        ];
        DB::table('management')->insert($data); 
    }
}
