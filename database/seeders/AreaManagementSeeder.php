<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('area_managements')->truncate();
        $data = [
            [
                'management_id'=>1,
                'description' => 'SELECCIÓN'
            ],
            [
                'management_id'=>1,
                'description' => 'SELECCIÓN Y FORMACIÓN'
            ],
            [
                'management_id'=>1,
                'description' => 'DESARROLLO'
            ],
            [
                'management_id'=>1,
                'description' => 'SEGURIDAD Y SALUD EN EL TRABAJO'
            ],
            [
                'management_id'=>1,
                'description' => 'NÓMINA'
            ],
            [
                'management_id'=>1,
                'description' => 'ENTRENAMIENTO Y FORMACIÓN'
            ],
            [
                'management_id'=>1,
                'description' => 'COMUNICACIÓN INTERNA'
            ],
            [
                'management_id'=>2,
                'description' => 'VENTAS NACIONAL'
            ],
            [
                'management_id'=>2,
                'description' => 'CANALES ALTERNATIVOS'
            ],
            [
                'management_id'=>2,
                'description' => 'E-COMMERCE'
            ],
            [
                'management_id'=>2,
                'description' => 'SOCIAL SELLING'
            ],
            [
                'management_id'=>2,
                'description' => 'FRANQUICIA INTERNACIONAL'
            ],
            [
                'management_id'=>2,
                'description' => 'FRANQUICIA NACIONAL'
            ],
            [
                'management_id'=>2,
                'description' => 'CIC'
            ],
            [
                'management_id'=>2,
                'description' => 'ADMIN COMERCIAL TIENDAS'
            ],
            [
                'management_id'=>3,
                'description' => 'VISUAL'
            ],
            [
                'management_id'=>3,
                'description' => 'LILI PRINT'
            ],
            [
                'management_id'=>3,
                'description' => 'PROYECTOS COMERCIALES'
            ],
            [
                'management_id'=>4,
                'description' => 'DIGITAL'
            ],
            [
                'management_id'=>4,
                'description' => 'MERCADEO'
            ],
            [
                'management_id'=>4,
                'description' => 'MODA Y TENDENCIA'
            ],
            [
                'management_id'=>4,
                'description' => 'DISEÑO GRÁFICO'
            ],
            [
                'management_id'=>4,
                'description' => 'SERVICIO AL CLIENTE'
            ],
            [
                'management_id'=>5,
                'description' => 'PLANEACION DE PRODUCTO'
            ],
            [
                'management_id'=>5,
                'description' => 'SOURCING TEXTIL'
            ],
            [
                'management_id'=>5,
                'description' => 'SOURCING NO TEXTIL'
            ],
            [
                'management_id'=>6,
                'description' => 'CONTABILIDAD'
            ],
            [
                'management_id'=>6,
                'description' => 'CARTERA'
            ],
            [
                'management_id'=>6,
                'description' => 'AUDITORÍA'
            ],
            [
                'management_id'=>6,
                'description' => 'SISTEMAS'
            ],
            [
                'management_id'=>6,
                'description' => 'COMPRAS'
            ],
            [
                'management_id'=>6,
                'description' => 'COMERCIO EXTERIOR'
            ],
            [
                'management_id'=>6,
                'description' => 'TESORERÍA'
            ],
            [
                'management_id'=>7,
                'description' => 'JURÍDICO'
            ],
            [
                'management_id'=>7,
                'description' => 'SERVICIOS GENERALES'
            ],
            [
                'management_id'=>7,
                'description' => 'SEGURIDAD'
            ],
            [
                'management_id'=>8,
                'description' => 'ADMINISTRATIVO'
            ],
            [
                'management_id'=>8,
                'description' => 'OPERATIVO'
            ],


        ];
        DB::table('area_managements')->insert($data); 
    }
}
