<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HolidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['description' => 'Año nuevo',
             'fecha' => '2024-01-01'],

            ['description' => 'Día de los Reyes Magos',
            'fecha' => '2024-01-08'],

            ['description' => 'Día de San José',
            'fecha' => '2024-03-25'],

            ['description' => 'Jueves Santo',
            'fecha' => '2024-03-28'],

            ['description' => 'Viernes Santo',
            'fecha' => '2024-03-29'],

            ['description' => 'Domingo de Resurrección',
            'fecha' => '2024-03-31'],

            ['description' => 'Día del Trabajo',
            'fecha' => '2024-05-01'],

            ['description' => 'Día de la Ascensión',
            'fecha' => '2024-05-13'],

            ['description' => 'Corpus Christi',
            'fecha' => '2024-06-03'],

            ['description' => 'Día del Sagrado Corazón',
            'fecha' => '2024-06-10'],

            ['description' => 'Día de San Pedro y San Pablo',
            'fecha' => '2024-07-01'],

            ['description' => 'Día de la Independencia de Colombia',
            'fecha' => '2024-07-20'],

            ['description' => 'Batalla de Boyacá',
            'fecha' => '2024-08-07'],

            ['description' => 'Asunción de la Virgen',
            'fecha' => '2024-08-19'],

            ['description' => 'Día de la Raza',
            'fecha' => '2024-10-14'],

            ['description' => 'Día de todos los Santos',
            'fecha' => '2024-11-04'],

            ['description' => 'Día de la Independencia de Cartagena',
            'fecha' => '2024-11-11'],

            ['description' => 'Día de la Inmaculada Concepción',
            'fecha' => '2024-12-08'],

            ['description' => 'Navidad',
            'fecha' => '2024-12-25'],

        ];
        DB::table('holidays')->insert($data); 
    }
}
