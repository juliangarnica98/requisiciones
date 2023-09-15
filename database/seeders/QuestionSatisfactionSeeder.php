<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSatisfactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['description' => 'RELACIÓN INTERPERSONAL CON TU JEFE DIRECTO'],
            ['description' => 'ACTIVIDADES DE BIENESTAR'],
            ['description' => 'HORARIO DE TRABAJO'],
            ['description' => 'CAPACITACIÓN'],
            ['description' => 'AMBIENTE LABORAL'],
            ['description' => 'POSIBILIDAD DE CRECIMIENTO DENTRO DE LA COMPAÑIA'],
            ['description' => 'CARGA DE TRABAJO'],
            ['description' => 'SALARIO'],
            ['description' => 'CUMPLIMIENTO EN LOS PAGOS'],
            ['description' => 'TIPO DE CONTRATO'],
        ];
        DB::table('question_satisfactions')->insert($data); 
    }
}
