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
            ['description' => 'Bogotá'],
            ['description' => 'Medellín'],
            ['description' => 'Cali'],
            ['description' => 'Barranquilla'],
            ['description' => 'Cartagena de Indias'],
            ['description' => 'Soacha'],
            ['description' => 'Tunja'],
            ['description' => 'Cúcuta'],
            ['description' => 'Soledad'],
            ['description' => 'Bucaramanga'],
            ['description' => 'Bello'],
            ['description' => 'Villavicencio'],
            ['description' => 'Ibagué'],
            ['description' => 'Santa Marta'],
            ['description' => 'Valledupar'],
            ['description' => 'Manizales'],
            ['description' => 'Pereira'],
            ['description' => 'Montería'],
            ['description' => 'Neiva'],
            ['description' => 'Pasto'],
            ['description' => 'Armenia'],
            ['description' => 'Rioacha'],
            ['description' => 'Sincelejo'],
            ['description' => 'Barrancabermeja'],
            ['description' => 'Popayan'],
            ['description' => 'Dos quebradas'],
            ['description' => 'Jamundi'],
            ['description' => 'Palmira'],
            ['description' => 'Ipiales'],
            ['description' => 'Yumbo'],
            ['description' => 'Cartago'],
            ['description' => 'Tulua'],
            ['description' => 'Girardot'],
            ['description' => 'Pitalito'],
            ['description' => 'Florencia'],
            ['description' => 'Cajica'],
            ['description' => 'Yopal'],
            ['description' => 'Duitama'],
            ['description' => 'Villeta'],
            ['description' => 'Sogamoso'],
            ['description' => 'Fusagasuga'],
            ['description' => 'Sopo'],
            ['description' => 'Tocancipa'],
            ['description' => 'Chia'],
            ['description' => 'Apartado'],
            ['description' => 'Zipaquira'],
            ['description' => 'Mosquera'],
            ['description' => 'Madrid'],
            ['description' => 'Funza'],
        ];
        DB::table('retirement_cities')->insert($data); 
    }
}
