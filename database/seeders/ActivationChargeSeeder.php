<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivationChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('activation_charges')->truncate();
       
        \DB::table('activation_charges')->delete();
        
        \DB::table('activation_charges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'effectiveness'=>20,
                'description' => 'ABOGADO(A)',
            ),
            1 => 
            array (
                'id' => 2,
                'effectiveness'=>16,
                'description' => 'ADMINISTRADOR DE BASE DE DATOS',
            ),
            2 => 
            array (
                'id' => 3,
                'effectiveness'=>10,
                'description' => 'ANALISTA ADMINISTRATIVO',
            ),
            3 => 
            array (
                'id' => 4,
                'effectiveness'=>10,
                'description' => 'ANALISTA COMERCIAL',
            ),
            4 => 
            array (
                'id' => 5,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE CARTERA',
            ),
            5 => 
            array (
                'id' => 6,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE CATEGORÍA DE BELLEZA',
            ),
            6 => 
            array (
                'id' => 7,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE CATEGORIA YOI',
            ),
            7 => 
            array (
                'id' => 8,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE CONTABILIDAD',
            ),
            8 => 
            array (
                'id' => 9,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE DATA',
            ),
            9 => 
            array (
                'id' => 10,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE DESARROLLO DE APP',
            ),
            10 => 
            array (
                'id' => 11,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE DISEÑO DIGITAL',
            ),
            11 => 
            array (
                'id' => 12,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE DISEÑO GRAFICO',
            ),
            12 => 
            array (
                'id' => 13,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE E-COMMERCE',
            ),
            13 => 
            array (
                'id' => 14,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE ENTRENAMIENTO Y FORMACIÓN',
            ),
            14 => 
            array (
                'id' => 15,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE FORMACION Y ENTRENAMIENTO',
            ),
            15 => 
            array (
                'id' => 16,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE GESTION HUMANA',
            ),
            16 => 
            array (
                'id' => 17,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE MANTENIMIENTO',
            ),
            17 => 
            array (
                'id' => 18,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE MERCADEO',
            ),
            18 => 
            array (
                'id' => 19,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE PLANEACION',
            ),
            19 => 
            array (
                'id' => 20,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE PLANEACION FINANCIERA',
            ),
            20 => 
            array (
                'id' => 21,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE PROCESOS',
            ),
            21 => 
            array (
                'id' => 22,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE PROYECTOS LOGISTICOS',
            ),
            22 => 
            array (
                'id' => 23,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE PROYECTOS LOGÍSTICOS',
            ),
            23 => 
            array (
                'id' => 24,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE SALUD Y SEGURIDAD EN EL TRABAJO',
            ),
            24 => 
            array (
                'id' => 25,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE SISTEMAS',
            ),
            25 => 
            array (
                'id' => 26,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE SOPORTE',
            ),
            26 => 
            array (
                'id' => 27,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE SOURCING NO TEXTIL',
            ),
            27 => 
            array (
                'id' => 28,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE SOURCING TEXTIL',
            ),
            28 => 
            array (
                'id' => 29,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE VENTAS NACIONAL',
            ),
            29 => 
            array (
                'id' => 30,
                'effectiveness'=>10,
                'description' => 'ANALISTA DE VISUAL MERCHANDISING',
            ),
            30 => 
            array (
                'id' => 31,
                'effectiveness'=>10,
                'description' => 'ANALISTA DISEÑO DE MODAS',
            ),
            31 => 
            array (
                'id' => 32,
                'effectiveness'=>10,
                'description' => 'ANALISTA FUNDACION LOS SUEÑOS DE LILI',
            ),
            32 => 
            array (
                'id' => 33,
                'effectiveness'=>10,
                'description' => 'ANALISTA LEGAL',
            ),
            33 => 
            array (
                'id' => 34,
                'effectiveness'=>10,
                'description' => 'ANALISTA SOPORTE POS',
            ),
            34 => 
            array (
                'id' => 35,
                'effectiveness'=>5,
                'description' => 'APC',
            ),
            35 => 
            array (
                'id' => 36,
                'effectiveness'=>16,
                'description' => 'ARQUITECTO JUNIOR',
            ),
            36 => 
            array (
                'id' => 37,
                'effectiveness'=>5,
                'description' => 'ASESOR INTEGRAL',
            ),
            37 => 
            array (
                'id' => 38,
                'effectiveness'=>5,
                'description' => 'ASESOR INTEGRAL TEMPORADA',
            ),
            38 => 
            array (
                'id' => 39,
                'effectiveness'=>5,
                'description' => 'ASESOR PUNTO DE COMPRA',
            ),
            39 => 
            array (
                'id' => 40,
                'effectiveness'=>10,
                'description' => 'ASESOR VENTA A DISTANCIA',
            ),
            40 => 
            array (
                'id' => 41,
                'effectiveness'=>9,
                'description' => 'ASISTENTE ADMINISTRATIVO',
            ),
            42 => 
            array (
                'id' => 43,
                'effectiveness'=>10,
                'description' => 'ASISTENTE DE GERENCIA',
            ),
            43 => 
            array (
                'id' => 44,
                'effectiveness'=>10,
                'description' => 'AUDITOR',
            ),
         
            45 => 
            array (
                'id' => 46,
                'effectiveness'=>5,
                'description' => 'AUXILIAR ADMINISTRATIVO',
            ),
            46 => 
            array (
                'id' => 47,
                'effectiveness'=>5,
                'description' => 'AUXILIAR CEDI',
            ),
            47 => 
            array (
                'id' => 48,
                'effectiveness'=>9,
                'description' => 'AUXILIAR COMERCIAL',
            ),
            48 => 
            array (
                'id' => 49,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE ARCHIVO',
            ),
            49 => 
            array (
                'id' => 50,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE ARQUITECTURA',
            ),
            50 => 
            array (
                'id' => 51,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE BANDAS',
            ),
            51 => 
            array (
                'id' => 52,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE CALIDAD',
            ),
            52 => 
            array (
                'id' => 53,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE CAMION',
            ),
            53 => 
            array (
                'id' => 54,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE CARTERA',
            ),
            54 => 
            array (
                'id' => 55,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE CODIFICACION',
            ),
            55 => 
            array (
                'id' => 56,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE CODIFICACIÓN',
            ),
            56 => 
            array (
                'id' => 57,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE COMERCIO EXTERIOR',
            ),
            57 => 
            array (
                'id' => 58,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE CONTABILIDAD',
            ),
            58 => 
            array (
                'id' => 59,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE CORTE',
            ),
            59 => 
            array (
                'id' => 60,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE CREDITO',
            ),
            60 => 
            array (
                'id' => 61,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE DESPACHOS',
            ),
            61 => 
            array (
                'id' => 62,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE DISEÑO MOBILIARIO',
            ),
            62 => 
            array (
                'id' => 63,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE INVENTARIOS',
            ),
            63 => 
            array (
                'id' => 64,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE MAESTRO DE MATERIALES',
            ),
            64 => 
            array (
                'id' => 65,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE MANTENIMIENTO',
            ),
            65 => 
            array (
                'id' => 66,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE MATERIALES',
            ),
            66 => 
            array (
                'id' => 67,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE OPERACIONES LOGISTICAS',
            ),
            67 => 
            array (
                'id' => 68,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE PLANTA DE IMPRESION',
            ),
            68 => 
            array (
                'id' => 69,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE PLANTA DE PRODUCCION',
            ),
            69 => 
            array (
                'id' => 70,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE PLANTA PRODUCCION',
            ),
            70 => 
            array (
                'id' => 71,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE PRODUCCION',
            ),
            71 => 
            array (
                'id' => 72,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE SERVICIOS GENERALES',
            ),
            72 => 
            array (
                'id' => 73,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE SISTEMAS',
            ),
            73 => 
            array (
                'id' => 74,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE SOURCING TEXTIL',
            ),
            74 => 
            array (
                'id' => 75,
                'effectiveness'=>9,
                'description' => 'AUXILIAR DE VISUAL MERCHANDISING',
            ),
            75 => 
            array (
                'id' => 76,
                'effectiveness'=>5,
                'description' => 'AUXILIAR I CEDI',
            ),

            77 => 
            array (
                'id' => 78,
                'effectiveness'=>5,
                'description' => 'AUXILIAR I DE CORTE',
            ),
            78 => 
            array (
                'id' => 79,
                'effectiveness'=>9,
                'description' => 'AUXILIAR I DE EXPERIENCIA MEMORABLE',
            ),
            80 => 
            array (
                'id' => 81,
                'effectiveness'=>5,
                'description' => 'AUXILIAR I PRODUCCIÓN',
            ),
            81 => 
            array (
                'id' => 82,
                'effectiveness'=>5,
                'description' => 'AUXILIAR II DE DESPACHOS',
            ),
            82 => 
            array (
                'id' => 83,
                'effectiveness'=>9,
                'description' => 'AUXILIAR II DE EXPERIENCIA MEMORABLE',
            ),
            83 => 
            array (
                'id' => 84,
                'effectiveness'=>5,
                'description' => 'AUXILIAR II DE INVENTARIOS',
            ),
            84 => 
            array (
                'id' => 85,
                'effectiveness'=>5,
                'description' => 'AUXILIAR II SORTER',
            ),
            85 => 
            array (
                'id' => 86,
                'effectiveness'=>5,
                'description' => 'AUXILIAR II DE DESPACHOS',
            ),
            86 => 
            array (
                'id' => 87,
                'effectiveness'=>5,
                'description' => 'AUXILIAR INTEGRAL',
            ),
            87 => 
            array (
                'id' => 88,
                'effectiveness'=>9,
                'description' => 'AUXILIAR POP Y VITRINAS',
            ),
            88 => 
            array (
                'id' => 89,
                'effectiveness'=>9,
                'description' => 'CAJERO',
            ),
            89 => 
            array (
                'id' => 90,
                'effectiveness'=>10,
                'description' => 'COMMUNITY MANAGER',
            ),
            90 => 
            array (
                'id' => 91,
                'effectiveness'=>5,
                'description' => 'CONDUCTOR',
            ),
            91 => 
            array (
                'id' => 92,
                'effectiveness'=>10,
                'description' => 'CONDUCTOR DE SEGURIDAD',
            ),
            92 => 
            array (
                'id' => 93,
                'effectiveness'=>16,
                'description' => 'CONSULTOR SAP',
            ),
            93 => 
            array (
                'id' => 94,
                'effectiveness'=>20,
                'description' => 'CONTRALOR',
            ),
            94 => 
            array (
                'id' => 95,
                'effectiveness'=>16,
                'description' => 'COORDINADOR ADMINISTRATIVO COMERCIAL',
            ),
            95 => 
            array (
                'id' => 96,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE CANALES ALTERNATIVOS',
            ),
            96 => 
            array (
                'id' => 97,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE CONTABILIDAD',
            ),
            97 => 
            array (
                'id' => 98,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE DISEÑO GRAFICO',
            ),
            98 => 
            array (
                'id' => 99,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE DISEÑO MOBILIARIO',
            ),
            99 => 
            array (
                'id' => 100,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE EXPERIENCIA MEMORABLE',
            ),
            100 => 
            array (
                'id' => 101,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE MANTENIMIENTO',
            ),
            101 => 
            array (
                'id' => 102,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE MARKETING DIGITAL',
            ),
            102 => 
            array (
                'id' => 103,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE MERCADEO INTERNACIONAL',
            ),
            103 => 
            array (
                'id' => 104,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE MESA DE AYUDA',
            ),
            104 => 
            array (
                'id' => 105,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE PLANEACION',
            ),
            105 => 
            array (
                'id' => 106,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE PLANEACIÓN FINANCIERA',
            ),
            106 => 
            array (
                'id' => 107,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE TIENDA',
            ),
            107 => 
            array (
                'id' => 108,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE VISUAL MERCHANDISING',
            ),
            108 => 
            array (
                'id' => 109,
                'effectiveness'=>16,
                'description' => 'COORDINADOR DE VISUAL MERCHANDISING INTERNACIONAL',
            ),
            109 => 
            array (
                'id' => 110,
                'effectiveness'=>10,
                'description' => 'CREADOR DE CONTENIDO DIGITAL',
            ),
            110 => 
            array (
                'id' => 111,
                'effectiveness'=>16,
                'description' => 'DESARROLLADOR',
            ),
            111 => 
            array (
                'id' => 112,
                'effectiveness'=>16,
                'description' => 'DESARROLLADOR DE APP',
            ),
            112 => 
            array (
                'id' => 113,
                'effectiveness'=>20,
                'description' => 'DIRECTOR COMERCIAL',
            ),
            113 => 
            array (
                'id' => 114,
                'effectiveness'=>20,
                'description' => 'DIRECTOR COMERCIAL DE VENTAS NACIONAL',
            ),
            114 => 
            array (
                'id' => 115,
                'effectiveness'=>20,
                'description' => 'DIRECTOR COMERCIAL TIENDAS',
            ),
            115 => 
            array (
                'id' => 116,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE CREDITO Y CARTERA',
            ),
            116 => 
            array (
                'id' => 117,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE FRANQUICIAS INTERNACIONAL',
            ),
            117 => 
            array (
                'id' => 118,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE MARCA',
            ),
            118 => 
            array (
                'id' => 119,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE OPERACIONES',
            ),
            119 => 
            array (
                'id' => 120,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE PLANEACION',
            ),
            120 => 
            array (
                'id' => 121,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE PRODUCCION',
            ),
            121 => 
            array (
                'id' => 122,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE PRODUCCIÓN LILI PRINT',
            ),
            122 => 
            array (
                'id' => 123,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE SISTEMAS',
            ),
            123 => 
            array (
                'id' => 124,
                'effectiveness'=>20,
                'description' => 'DIRECTOR DE SOURCING TEXTIL',
            ),
            124 => 
            array (
                'id' => 125,
                'effectiveness'=>20,
                'description' => 'DIRECTOR JUNIOR COMERCIAL TIENDAS',
            ),
            125 => 
            array (
                'id' => 126,
                'effectiveness'=>20,
                'description' => 'DIRECTOR SOURCING NO TEXTIL',
            ),
            126 => 
            array (
                'id' => 127,
                'effectiveness'=>20,
                'description' => 'DIRECTOR TECNICO Y DE CALIDAD',
            ),
            127 => 
            array (
                'id' => 128,
                'effectiveness'=>10,
                'description' => 'EJECUTIVO COMERCIAL',
            ),
            128 => 
            array (
                'id' => 129,
                'effectiveness'=>16,
                'description' => 'ESPECIALISTA DE COMUNICACIONES',
            ),
            129 => 
            array (
                'id' => 130,
                'effectiveness'=>16,
                'description' => 'ESPECIALISTA DE CONTABILIDAD',
            ),
            130 => 
            array (
                'id' => 131,
                'effectiveness'=>16,
                'description' => 'ESPECIALISTA DE GESTIÓN HUMANA',
            ),
            131 => 
            array (
                'id' => 132,
                'effectiveness'=>16,
                'description' => 'ESPECIALISTA DE NOMINA',
            ),
            132 => 
            array (
                'id' => 133,
                'effectiveness'=>16,
                'description' => 'ESPECIALISTA DE VISUAL MERCHANDISING',
            ),
            133 => 
            array (
                'id' => 134,
                'effectiveness'=>16,
                'description' => 'ESPECIALISTA EN FASHION STYLING Y PRODUCCION AUDIO',
            ),
            135 => 
            array (
                'id' => 136,
                'effectiveness'=>10,
                'description' => 'FOTÓGRAFO',
            ),
            136 => 
            array (
                'id' => 137,
                'effectiveness'=>10,
                'description' => 'GENERALISTA DE GESTION HUMANA',
            ),
            137 => 
            array (
                'id' => 138,
                'effectiveness'=>25,
                'description' => 'GERENTE COMERCIAL',
            ),
            138 => 
            array (
                'id' => 139,
                'effectiveness'=>25,
                'description' => 'GERENTE DE FINANZAS',
            ),
            139 => 
            array (
                'id' => 140,
                'effectiveness'=>25,
                'description' => 'GERENTE DE GESTION HUMANA',
            ),
            140 => 
            array (
                'id' => 141,
                'effectiveness'=>25,
                'description' => 'GERENTE DE MERCADEO Y PRODUCTO',
            ),
            141 => 
            array (
                'id' => 142,
                'effectiveness'=>25,
                'description' => 'GERENTE DE VISUAL MERCHANDISING Y MERCADEO',
            ),
            142 => 
            array (
                'id' => 143,
                'effectiveness'=>25,
                'description' => 'GERENTE FINANCIERO',
            ),
            143 => 
            array (
                'id' => 144,
                'effectiveness'=>25,
                'description' => 'GESTOR DE FORMACION',
            ),
            144 => 
            array (
                'id' => 145,
                'effectiveness'=>25,
                'description' => 'JEFE COMERCIAL DE VENTA NACIONAL',
            ),
            145 => 
            array (
                'id' => 146,
                'effectiveness'=>17,
                'description' => 'JEFE DE ARQUITECTURA',
            ),
            146 => 
            array (
                'id' => 147,
                'effectiveness'=>17,
                'description' => 'JEFE DE AUDITORIA',
            ),
            147 => 
            array (
                'id' => 148,
                'effectiveness'=>7,
                'description' => 'JEFE DE BANDAS',
            ),
            148 => 
            array (
                'id' => 149,
                'effectiveness'=>17,
                'description' => 'JEFE DE CATEGORIA DE BIENESTAR Y BELLEZA',
            ),
            149 => 
            array (
                'id' => 150,
                'effectiveness'=>17,
                'description' => 'JEFE DE CENTRO DE DISTRIBUCIÓN',
            ),
            150 => 
            array (
                'id' => 151,
                'effectiveness'=>17,
                'description' => 'JEFE DE COMERCIO EXTERIOR',
            ),
            151 => 
            array (
                'id' => 152,
                'effectiveness'=>17,
                'description' => 'JEFE DE COMERCIO INTERNACIONAL',
            ),
            152 => 
            array (
                'id' => 153,
                'effectiveness'=>17,
                'description' => 'JEFE DE COMPRAS',
            ),
            153 => 
            array (
                'id' => 154,
                'effectiveness'=>17,
                'description' => 'JEFE DE COMPRAS Y LOGISTICA',
            ),
            154 => 
            array (
                'id' => 155,
                'effectiveness'=>17,
                'description' => 'JEFE DE CONTABILIDAD',
            ),
            155 => 
            array (
                'id' => 156,
                'effectiveness'=>7,
                'description' => 'JEFE DE DESPACHOS',
            ),
            156 => 
            array (
                'id' => 157,
                'effectiveness'=>17,
                'description' => 'JEFE DE DISEÑO GRAFICO',
            ),
            157 => 
            array (
                'id' => 158,
                'effectiveness'=>17,
                'description' => 'JEFE DE ENTRENAMIENTO Y FORMACION',
            ),
            158 => 
            array (
                'id' => 159,
                'effectiveness'=>17,
                'description' => 'JEFE DE EXPERIENCIA MEMORABLE DE SERVICIO',
            ),
            159 => 
            array (
                'id' => 160,
                'effectiveness'=>17,
                'description' => 'JEFE DE FRANQUICIAS',
            ),
            160 => 
            array (
                'id' => 161,
                'effectiveness'=>17,
                'description' => 'JEFE DE FUNDACIONES',
            ),
            161 => 
            array (
                'id' => 162,
                'effectiveness'=>17,
                'description' => 'JEFE DE GESTION HUMANA',
            ),
            162 => 
            array (
                'id' => 163,
                'effectiveness'=>17,
                'description' => 'JEFE DE IMPUESTOS',
            ),
            163 => 
            array (
                'id' => 164,
                'effectiveness'=>17,
                'description' => 'JEFE DE INFORMACION',
            ),
            164 => 
            array (
                'id' => 165,
                'effectiveness'=>17,
                'description' => 'JEFE DE MANTENIEMINTO E INTERNACIONAL',
            ),
            165 => 
            array (
                'id' => 166,
                'effectiveness'=>17,
                'description' => 'JEFE DE MARKETING DIGITAL',
            ),
            166 => 
            array (
                'id' => 167,
                'effectiveness'=>17,
                'description' => 'JEFE DE MERCADEO',
            ),
            167 => 
            array (
                'id' => 168,
                'effectiveness'=>17,
                'description' => 'JEFE DE PROCESOS',
            ),
            168 => 
            array (
                'id' => 169,
                'effectiveness'=>17,
                'description' => 'JEFE DE PROCESOS Y PROCEDIMIENTOS',
            ),
            169 => 
            array (
                'id' => 170,
                'effectiveness'=>7,
                'description' => 'JEFE DE PRODUCCION',
            ),
            170 => 
            array (
                'id' => 171,
                'effectiveness'=>17,
                'description' => 'JEFE DE SUPPLY',
            ),
            171 => 
            array (
                'id' => 172,
                'effectiveness'=>17,
                'description' => 'JEFE DE VISUAL MERCHANDISING',
            ),
            172 => 
            array (
                'id' => 173,
                'effectiveness'=>15,
                'description' => 'JEFE DE ZONA',
            ),
            173 => 
            array (
                'id' => 174,
                'effectiveness'=>17,
                'description' => 'JEFE DESARROLLO DE PRODUCTO',
            ),
            174 => 
            array (
                'id' => 175,
                'effectiveness'=>17,
                'description' => 'JEFE PLANEACION DRP',
            ),
            175 => 
            array (
                'id' => 176,
                'effectiveness'=>17,
                'description' => 'JEFE SOURCING',
            ),
            176 => 
            array (
                'id' => 177,
                'effectiveness'=>17,
                'description' => 'JEFE VISUAL BELLEZA & CORPORAL LILIPINK Y YOI',
            ),
            177 => 
            array (
                'id' => 178,
                'effectiveness'=>7,
                'description' => 'LIDER BODEGA',
            ),
            178 => 
            array (
                'id' => 179,
                'effectiveness'=>7,
                'description' => 'LIDER COSTOS DE PRODUCCION',
            ),
            179 => 
            array (
                'id' => 180,
                'effectiveness'=>7,
                'description' => 'LIDER DE .COM',
            ),
            180 => 
            array (
                'id' => 181,
                'effectiveness'=>7,
                'description' => 'LIDER DE CORTE',
            ),
            181 => 
            array (
                'id' => 182,
                'effectiveness'=>7,
                'description' => 'LIDER DE DESPACHO',
            ),
            182 => 
            array (
                'id' => 183,
                'effectiveness'=>7,
                'description' => 'LIDER DE DESPACHOS',
            ),
            183 => 
            array (
                'id' => 184,
                'effectiveness'=>7,
                'description' => 'LIDER DE DEVOLUCIONES',
            ),
            184 => 
            array (
                'id' => 185,
                'effectiveness'=>7,
                'description' => 'LIDER DE INVENTARIOS',
            ),
            185 => 
            array (
                'id' => 186,
                'effectiveness'=>7,
                'description' => 'LIDER DE MOVILIARIO',
            ),
            186 => 
            array (
                'id' => 187,
                'effectiveness'=>7,
                'description' => 'LIDER DE PICKING',
            ),
            187 => 
            array (
                'id' => 188,
                'effectiveness'=>7,
                'description' => 'LIDER DE PLANEACIÓN',
            ),
            188 => 
            array (
                'id' => 189,
                'effectiveness'=>7,
                'description' => 'LIDER DE PLOTTER',
            ),
            189 => 
            array (
                'id' => 190,
                'effectiveness'=>7,
                'description' => 'LIDER DE PRODUCCION',
            ),
            // 190 => 
            // array (
            //     'id' => 191,
            //     'effectiveness'=>7,
            //     'description' => 'LIDER DE PRODUCCION BANDAS',
            // ),
            191 => 
            array (
                'id' => 192,
                'effectiveness'=>7,
                'description' => 'LIDER DE RECIBO Y ALMACENAMIENTO',
            ),
            192 => 
            array (
                'id' => 193,
                'effectiveness'=>10,
                'description' => 'LIDER DE TIENDA',
            ),
            193 => 
            array (
                'id' => 194,
                'effectiveness'=>10,
                'description' => 'MENSAJERO',
            ),
    
            195 => 
            array (
                'id' => 196,
                'effectiveness'=>9,
                'description' => 'MERCADERISTA UNIQUE',
            ),
            197 => 
            array (
                'id' => 198,
                'effectiveness'=>5,
                'description' => 'MONTACARGUISTA',
            ),
            198 => 
            array (
                'id' => 199,
                'effectiveness'=>10,
                'description' => 'OFICIAL DE SEGURIDAD',
            ),
            199 => 
            array (
                'id' => 200,
                'effectiveness'=>5,
                'description' => 'OPERARIO DE MAQUINA',
            ),
            203 => 
            array (
                'id' => 204,
                'effectiveness'=>0,
                'description' => 'OPERARIO DE PRODUCCION',
            ),
            204 => 
            array (
                'id' => 205,
                'effectiveness'=>0,
                'description' => 'OPERARIO DE PRODUCCION I',
            ),
            205 => 
            array (
                'id' => 206,
                'effectiveness'=>0,
                'description' => 'OPERARIO DE PRODUCCION II',
            ),
         
          
            208 => 
            array (
                'id' => 209,
                'effectiveness'=>16,
                'description' => 'RESPONSABLE TECNICO',
            ),
            209 => 
            array (
                'id' => 210,
                'effectiveness'=>9,
                'description' => 'SERVICIOS GENERALES',
            ),
            210 => 
            array (
                'id' => 211,
                'effectiveness'=>10,
                'description' => 'SUPERVISOR DE MANTENIMIENTO',
            ),
            211 => 
            array (
                'id' => 212,
                'effectiveness'=>7,
                'description' => 'SUPERVISOR DE PRODUCCION',
            ),
            212 => 
            array (
                'id' => 213,
                'effectiveness'=>16,
                'description' => 'SUPPLY PLANNER',
            ),
            213 => 
            array (
                'id' => 214,
                'effectiveness'=>10,
                'description' => 'TECNICO DE MANTENIMIENTO',
            ),
            214 => 
            array (
                'id' => 215,
                'effectiveness'=>10,
                'description' => 'TECNICO TODERO',
            ),
            215 => 
            array (
                'id' => 216,
                'effectiveness'=>17,
                'description' => 'TESORERO',
            ),
            216 => 
            array (
                'id' => 217,
                'effectiveness'=>9,
                'description' => 'VISUAL MERCHANDISING',
            ),
            217 => 
            array (
                'id' => 218,
                'effectiveness'=>7,
                'description' => 'CORTADOR',
            ),
            218 => 
            array (
                'id' => 219,
                'effectiveness'=>5,
                'description' => 'AUXILIAR DE SEGURIDAD ',
            ),
            219 => 
            array (
                'id' => 220,
                'effectiveness'=>7,
                'description' => 'GERENTE DE OPERACIONES',
            ),
            220 => 
            array (
                'id' => 221,
                'effectiveness'=>7,
                'description' => 'JEFE DE CEDI',
            ),

        ));
        
        
    }
}
