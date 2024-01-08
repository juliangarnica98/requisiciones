<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('tiendas')->delete();
        
        DB::table('tiendas')->insert(array (
            0 => 
            array (
                'id' => 1,

                'description' => 'YAHAD VLL CLI LA LUNA',
                'regional_id' => 4,
            ),
            1 => 
            array (
                'id' => 2,

                'description' => 'YOI PEI UNICENTRO PEREIRA',
                'regional_id' => 4,
            ),
            2 => 
            array (
                'id' => 3,

                'description' => 'LLP BOG CC HEROES',
                'regional_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,

                'description' => 'LLP PSO PLAZA DE NARI?O',
                'regional_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,

                'description' => 'LILI&YOI SCH YAHAD VENTURA SOACHA',
                'regional_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,

                'description' => 'YOI CLI EXITO LA FLORA L-0204A',
                'regional_id' => 4,
            ),
            6 => 
            array (
                'id' => 7,

                'description' => 'LLP PEI CENTRO CRA 7',
                'regional_id' => 4,
            ),
            7 => 
            array (
                'id' => 8,

                'description' => 'LILI&YOI YAHAAD ATL BRQ CC PASEO',
                'regional_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,

                'description' => 'YAHAD UNICO CALI',
                'regional_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,

                'description' => 'LLP CLD CALDAS CRA 49',
                'regional_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,

                'description' => 'YOI SOL CC GRAN PLAZA SOLEDAD L-1-53',
                'regional_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,

                'description' => 'L&Y YAH CC NOVACENTRO PASTO',
                'regional_id' => 4,
            ),
            12 => 
            array (
                'id' => 13,

                'description' => 'LLP PSO CC IDEMA L-60',
                'regional_id' => 4,
            ),
            13 => 
            array (
                'id' => 14,

                'description' => 'LILI&YOI YAHAD BOG RESTREPO CLL16',
                'regional_id' => 5,
            ),
            14 => 
            array (
                'id' => 15,

                'description' => 'LLP BOG RESTREPO CLL 18 SUR',
                'regional_id' => 5,
            ),
            15 => 
            array (
                'id' => 16,

                'description' => 'LILIPINK VLL CLI CEIBAS LOWCOST',
                'regional_id' => 4,
            ),
            16 => 
            array (
                'id' => 17,

                'description' => 'YOI CTG EXITO MATUNA',
                'regional_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,

                'description' => 'YOI CUC EXITO SAN MATEO',
                'regional_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,

                'description' => 'YOI BOG EXITO CHAPINERO',
                'regional_id' => 3,
            ),
            19 => 
            array (
                'id' => 20,

                'description' => 'YOI BGA CC LA CUESTA L-149-150',
                'regional_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,

                'description' => 'LLP BOG CC HAYUELOS L-1-103',
                'regional_id' => 3,
            ),
            21 => 
            array (
                'id' => 22,

                'description' => 'LLP DTM CC LIBERTADORES L-102',
                'regional_id' => 3,
            ),
            22 => 
            array (
                'id' => 23,

                'description' => 'YOI EXITO ANT BELLO CENTRO',
                'regional_id' => 1,
            ),
            23 => 
            array (
                'id' => 24,

                'description' => 'L&Y YAH BOG TOBERIN',
                'regional_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,

                'description' => 'LLP VUP CC MAYALES L-81',
                'regional_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,

                'description' => 'LLP CLI CC PALMETO PLAZA L1-71',
                'regional_id' => 4,
            ),
            26 => 
            array (
                'id' => 27,

                'description' => 'YOI MDE EXITO UNICENTRO',
                'regional_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,

                'description' => 'YOI BOG EXITO OCCIDENTE',
                'regional_id' => 3,
            ),
            28 => 
            array (
                'id' => 29,

                'description' => 'LLP BGA CC MEGAMALL L-20-21',
                'regional_id' => 1,
            ),
            29 => 
            array (
                'id' => 30,

                'description' => 'LLP SMR CC ARRECIFE L-104',
                'regional_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,

                'description' => 'YOI IBE EXITO IBAGUE',
                'regional_id' => 5,
            ),
            31 => 
            array (
                'id' => 32,

                'description' => 'LLP CIE CRA 11 CIENAGA',
                'regional_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,

                'description' => 'L&Y YAH SAD SAN ANDRES',
                'regional_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,

                'description' => 'LLP IPI CENTRO CRA 5',
                'regional_id' => 4,
            ),
            34 => 
            array (
                'id' => 35,

                'description' => 'LLP GIR CENTRO CRA10',
                'regional_id' => 5,
            ),
            35 => 
            array (
                'id' => 36,

                'description' => 'L&Y BOG CIUDAD MONTE',
                'regional_id' => 5,
            ),
            36 => 
            array (
                'id' => 37,

                'description' => 'LLP CLI CC COSMOCENTRO L-2G',
                'regional_id' => 4,
            ),
            37 => 
            array (
                'id' => 38,

                'description' => 'LLP NVA CC SAN PEDRO',
                'regional_id' => 5,
            ),
            38 => 
            array (
                'id' => 39,

                'description' => 'LLP BOG CC GRAN PLAZA ENSUE?O L-158',
                'regional_id' => 5,
            ),
            39 => 
            array (
                'id' => 40,

                'description' => 'LILI&YOI YAHAD CLI CENTRO',
                'regional_id' => 4,
            ),
            40 => 
            array (
                'id' => 41,

                'description' => 'LLP IBE CC LA ESTACION L-2-02',
                'regional_id' => 5,
            ),
            41 => 
            array (
                'id' => 42,

                'description' => 'LLP CHI CC FONTANAR',
                'regional_id' => 3,
            ),
            42 => 
            array (
                'id' => 43,

                'description' => 'LLP SMR CC ZAZUE L-1-21',
                'regional_id' => 2,
            ),
            43 => 
            array (
                'id' => 44,

                'description' => 'LLP CLI PASO ANCHO',
                'regional_id' => 4,
            ),
            44 => 
            array (
                'id' => 45,

                'description' => 'L&Y YAH ZPQ ZIPAQUIRA',
                'regional_id' => 3,
            ),
            45 => 
            array (
                'id' => 46,

                'description' => 'LLP MTR CC NUESTRO MONTERIA L-0295',
                'regional_id' => 2,
            ),
            46 => 
            array (
                'id' => 47,

                'description' => 'YOI ARM CC PORTAL QUINDIO L-313-314-315',
                'regional_id' => 4,
            ),
            47 => 
            array (
                'id' => 48,

                'description' => 'YOI BOG EXITO NUEVO KENNEDY',
                'regional_id' => 5,
            ),
            48 => 
            array (
                'id' => 49,

                'description' => 'L&Y YAH BGA CRA 33 BUCARAMANGA',
                'regional_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,

                'description' => 'LLP BOG ALAMOS INDUSTRIAL',
                'regional_id' => 3,
            ),
            50 => 
            array (
                'id' => 51,

                'description' => 'YOI PSO CC UNICO PASTO',
                'regional_id' => 4,
            ),
            51 => 
            array (
                'id' => 52,

                'description' => 'YOI EXITO ANT ROBLEDO',
                'regional_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,

                'description' => 'YOI BOG EXITO VILLA MAYOR',
                'regional_id' => 5,
            ),
            53 => 
            array (
                'id' => 54,

                'description' => 'YAHAD MZL CENTRO OUT',
                'regional_id' => 4,
            ),
            54 => 
            array (
                'id' => 55,

                'description' => 'L&Y YAH ITA ITAGUI',
                'regional_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,

                'description' => 'LLP VLL CLI REMANSO',
                'regional_id' => 4,
            ),
            56 => 
            array (
                'id' => 57,

                'description' => 'YAHAD VLL CLI MANUELA BELTRAN',
                'regional_id' => 4,
            ),
            57 => 
            array (
                'id' => 58,

                'description' => 'YOI EXITO VLL TULUA EL RETIRO',
                'regional_id' => 4,
            ),
            58 => 
            array (
                'id' => 59,

                'description' => 'YOI SCJ CC GUACARI',
                'regional_id' => 2,
            ),
            59 => 
            array (
                'id' => 60,

                'description' => 'LLP MTR LIA MONTERIA',
                'regional_id' => 2,
            ),
            60 => 
            array (
                'id' => 61,

                'description' => 'YOI EXITO SANTA MARTA CENTRO',
                'regional_id' => 2,
            ),
            61 => 
            array (
                'id' => 62,

                'description' => 'YOI BOG CC PLAZA DE LAS AMERICAS L-10-37',
                'regional_id' => 5,
            ),
            62 => 
            array (
                'id' => 63,

                'description' => 'YOI ENV EXITO VIVA ENVIGADO',
                'regional_id' => 1,
            ),
            63 => 
            array (
                'id' => 64,

                'description' => 'LLP MDE CC SANTAFE L-9100',
                'regional_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,

                'description' => 'LLP BGA CC ACROPOLIS L-156-157',
                'regional_id' => 1,
            ),
            65 => 
            array (
                'id' => 66,

                'description' => 'YOI APO EXITO PLAZA DEL RIO',
                'regional_id' => 2,
            ),
            66 => 
            array (
                'id' => 67,

                'description' => 'LLP ENV CC VIVA ENVIGADO L-227',
                'regional_id' => 1,
            ),
            67 => 
            array (
                'id' => 68,

                'description' => 'LLP BOG CC TREBOLIS',
                'regional_id' => 5,
            ),
            68 => 
            array (
                'id' => 69,

                'description' => 'YOI NVA EXITO SAN PEDRO',
                'regional_id' => 5,
            ),
            69 => 
            array (
                'id' => 70,

                'description' => 'LLP BOG CC PLAZA IMPERIAL L-1-167',
                'regional_id' => 3,
            ),
            70 => 
            array (
                'id' => 71,

                'description' => 'L&Y YAHAAD OUTLET AV 68',
                'regional_id' => 3,
            ),
            71 => 
            array (
                'id' => 72,

                'description' => 'LLP RCH CC VIVA WAAJIRA L-108',
                'regional_id' => 2,
            ),
            72 => 
            array (
                'id' => 73,

                'description' => 'YAHAD BOG FLORESTA',
                'regional_id' => 3,
            ),
            73 => 
            array (
                'id' => 74,

                'description' => 'YOI CTG CC MALLPLAZA',
                'regional_id' => 2,
            ),
            74 => 
            array (
                'id' => 75,

                'description' => 'YOI BAQ NUESTRO ATLANTICO BARRANQUILLA',
                'regional_id' => 2,
            ),
            75 => 
            array (
                'id' => 76,

                'description' => 'YOI EXITO ANT MED BELEN',
                'regional_id' => 1,
            ),
            76 => 
            array (
                'id' => 77,

                'description' => 'LLP CTG CC CARIBE PLAZA L-1-79-80',
                'regional_id' => 2,
            ),
            77 => 
            array (
                'id' => 78,

                'description' => 'YOI MTR EXITO ALAMEDA DEL SINU MONTERIA',
                'regional_id' => 2,
            ),
            78 => 
            array (
                'id' => 79,

                'description' => 'YOI MDE CC PREMIUN PLAZA',
                'regional_id' => 1,
            ),
            79 => 
            array (
                'id' => 80,

                'description' => 'YOI EXITO ANT SABANETA',
                'regional_id' => 1,
            ),
            80 => 
            array (
                'id' => 81,

                'description' => 'YOI BOG GALAN BOGOTA',
                'regional_id' => 5,
            ),
            81 => 
            array (
                'id' => 82,

                'description' => 'LLP CTG CC MALLPLAZA L-122-123',
                'regional_id' => 2,
            ),
            82 => 
            array (
                'id' => 83,

                'description' => 'YOI CTG EXITO CARTAGENA',
                'regional_id' => 2,
            ),
            83 => 
            array (
                'id' => 84,

                'description' => 'LLP PEI CENTRO CRA 6',
                'regional_id' => 4,
            ),
            84 => 
            array (
                'id' => 85,

                'description' => 'YOI BOG CHAPINERO CR13 - 63',
                'regional_id' => 3,
            ),
            85 => 
            array (
                'id' => 86,

                'description' => 'YOI CTG EXITO LA CASTELLANA',
                'regional_id' => 2,
            ),
            86 => 
            array (
                'id' => 87,

                'description' => 'LLP BOG CASTILLA BOGOTA',
                'regional_id' => 5,
            ),
            87 => 
            array (
                'id' => 88,

                'description' => 'LLP BEL CC PLAZA FABRICATO BELLO',
                'regional_id' => 1,
            ),
            88 => 
            array (
                'id' => 89,

                'description' => 'LLP BOG PRADERA CLL 9 L-10',
                'regional_id' => 5,
            ),
            89 => 
            array (
                'id' => 90,

                'description' => 'YAHAD BOG MEGAAMERICAS',
                'regional_id' => 5,
            ),
            90 => 
            array (
                'id' => 91,

                'description' => 'LLP BOG KENNEDY CLL 37 SUR',
                'regional_id' => 5,
            ),
            91 => 
            array (
                'id' => 92,

                'description' => 'LLP VIL V/CENCIO CRA 30',
                'regional_id' => 5,
            ),
            92 => 
            array (
                'id' => 93,

                'description' => 'YOI BOG EXITO FONTIBON',
                'regional_id' => 3,
            ),
            93 => 
            array (
                'id' => 94,

                'description' => 'L&Y YAH CLI ROOSEVELT',
                'regional_id' => 4,
            ),
            94 => 
            array (
                'id' => 95,

                'description' => 'YOI VUP EXITO LAS FLORES',
                'regional_id' => 2,
            ),
            95 => 
            array (
                'id' => 96,

                'description' => 'LILI&YOI YAHAD BMG CRA 14 CENTRO',
                'regional_id' => 1,
            ),
            96 => 
            array (
                'id' => 97,

                'description' => 'YOI SBN MAYORCA ETAPA 1 L-3237',
                'regional_id' => 1,
            ),
            97 => 
            array (
                'id' => 98,

                'description' => 'LLP TNJ CC UNICENTRO L-1019',
                'regional_id' => 3,
            ),
            98 => 
            array (
                'id' => 99,

                'description' => 'YOI MDE EXITO COLOMBIA',
                'regional_id' => 1,
            ),
            99 => 
            array (
                'id' => 100,

                'description' => 'LLP PEI CC CALIMA L-19',
                'regional_id' => 4,
            ),
            100 => 
            array (
                'id' => 101,

                'description' => 'YOI MTR CC NUESTRO MONTER?A L-165',
                'regional_id' => 2,
            ),
            101 => 
            array (
                'id' => 102,

                'description' => 'LLP BOG CC GRAN PLAZA BOSA L-158',
                'regional_id' => 5,
            ),
            102 => 
            array (
                'id' => 103,

                'description' => 'YAHAD MED MAYORCA OUTLET',
                'regional_id' => 1,
            ),
            103 => 
            array (
                'id' => 104,

                'description' => 'LLP FSG CC AV CENTRAL L-227',
                'regional_id' => 5,
            ),
            104 => 
            array (
                'id' => 105,

                'description' => 'L&Y BOG CALLE 93 DELIVERIES',
                'regional_id' => 3,
            ),
            105 => 
            array (
                'id' => 106,

                'description' => 'YOI SMR CC ARRECIFE',
                'regional_id' => 2,
            ),
            106 => 
            array (
                'id' => 107,

                'description' => 'YOI MDE EXITO PUERTA DEL NORTE',
                'regional_id' => 1,
            ),
            107 => 
            array (
                'id' => 108,

                'description' => 'L&Y YAH YPL CASANARE YOPAL',
                'regional_id' => 5,
            ),
            108 => 
            array (
                'id' => 109,

                'description' => 'LLP YPL CC UNICENTRO L-207',
                'regional_id' => 5,
            ),
            109 => 
            array (
                'id' => 110,

                'description' => 'LLP BOG CC METROPOLIS L-120-A',
                'regional_id' => 3,
            ),
            110 => 
            array (
                'id' => 111,

                'description' => 'YOI ENV EXITO ENVIGADO CENTRO',
                'regional_id' => 1,
            ),
            111 => 
            array (
                'id' => 112,

                'description' => 'YOI CUN CHIA EXITO FONTANAR',
                'regional_id' => 3,
            ),
            112 => 
            array (
                'id' => 113,

                'description' => 'LLP YPL CC ALCARAVAN L-1-074',
                'regional_id' => 5,
            ),
            113 => 
            array (
                'id' => 114,

                'description' => 'LLP BOG CARPA AMERICAS PROM',
                'regional_id' => 3,
            ),
            114 => 
            array (
                'id' => 115,

                'description' => 'YOI MDR CC CASA BLANCA',
                'regional_id' => 3,
            ),
            115 => 
            array (
                'id' => 116,

                'description' => 'YOI CLI EXITO SAN FERNANDO',
                'regional_id' => 4,
            ),
            116 => 
            array (
                'id' => 117,

                'description' => 'YOI MDE EXITO SAN DIEGO',
                'regional_id' => 1,
            ),
            117 => 
            array (
                'id' => 118,

                'description' => 'LLP MDE CC VIVA LAURELES L-140',
                'regional_id' => 1,
            ),
            118 => 
            array (
                'id' => 119,

                'description' => 'YOI ATL SOLEDAD CARNAVAL',
                'regional_id' => 2,
            ),
            119 => 
            array (
                'id' => 120,

                'description' => 'LLP BGA CC LA CUESTA L-242',
                'regional_id' => 1,
            ),
            120 => 
            array (
                'id' => 121,

                'description' => 'LLP PSO CC UNICO L-26',
                'regional_id' => 4,
            ),
            121 => 
            array (
                'id' => 122,

                'description' => 'YOI MDE EXITO POBLADO',
                'regional_id' => 1,
            ),
            122 => 
            array (
                'id' => 123,

                'description' => 'LILI&YOI YAHAD BOY SOGAMOSO CLL 11',
                'regional_id' => 3,
            ),
            123 => 
            array (
                'id' => 124,

                'description' => 'LLP MDE LA PLAYA CLL 52',
                'regional_id' => 1,
            ),
            124 => 
            array (
                'id' => 125,

                'description' => 'LLP PLM CC UNICENTRO L-1-51',
                'regional_id' => 4,
            ),
            125 => 
            array (
                'id' => 126,

                'description' => 'YOI MDE EXITO SAN ANTONIO',
                'regional_id' => 1,
            ),
            126 => 
            array (
                'id' => 127,

                'description' => 'YOI CRC CC NUESTRO CARTAGO L-2-66A',
                'regional_id' => 4,
            ),
            127 => 
            array (
                'id' => 128,

                'description' => 'YOI BOG CC EL EDEN L-1-124',
                'regional_id' => 5,
            ),
            128 => 
            array (
                'id' => 129,

                'description' => 'YOI SCJ EXITO VIVA SINCELEJO',
                'regional_id' => 2,
            ),
            129 => 
            array (
                'id' => 130,

                'description' => 'LILI&YOI BAQ YAHAD',
                'regional_id' => 2,
            ),
            130 => 
            array (
                'id' => 131,

                'description' => 'YOI SMR EXITO LIBERTADOR',
                'regional_id' => 2,
            ),
            131 => 
            array (
                'id' => 132,

                'description' => 'YOI ANT MED CC DE MODA OUTLET',
                'regional_id' => 1,
            ),
            132 => 
            array (
                'id' => 133,

                'description' => 'LLP MDE CC LA CENTRAL L-257',
                'regional_id' => 1,
            ),
            133 => 
            array (
                'id' => 134,

                'description' => 'LLP MDE CC UNICENTRO L-023',
                'regional_id' => 1,
            ),
            134 => 
            array (
                'id' => 135,

                'description' => 'YOI ARM EXITO UNICENTRO',
                'regional_id' => 4,
            ),
            135 => 
            array (
                'id' => 136,

                'description' => 'LLP MDE CC ARKADIA L-318',
                'regional_id' => 1,
            ),
            136 => 
            array (
                'id' => 137,

                'description' => 'LLP SBN MAYORCA ETAPA 2 L-2021',
                'regional_id' => 1,
            ),
            137 => 
            array (
                'id' => 138,

                'description' => 'LLP PEI CENTRO CRA 9',
                'regional_id' => 4,
            ),
            138 => 
            array (
                'id' => 139,

                'description' => 'LLP MDE CC SAN DIEGO L-1551',
                'regional_id' => 1,
            ),
            139 => 
            array (
                'id' => 140,

                'description' => 'YOI IBE EXITO LA ESTACION',
                'regional_id' => 5,
            ),
            140 => 
            array (
                'id' => 141,

                'description' => 'LLP PEI CC UNICENTRO L-B-02',
                'regional_id' => 4,
            ),
            141 => 
            array (
                'id' => 142,

                'description' => 'LLP BOG QUIRIGUA TRV 94',
                'regional_id' => 3,
            ),
            142 => 
            array (
                'id' => 143,

                'description' => 'LLP IBE CC MULTICENTRO L-2-34',
                'regional_id' => 5,
            ),
            143 => 
            array (
                'id' => 144,

                'description' => 'YOI BAQ EXITO SAN FRANCISCO',
                'regional_id' => 2,
            ),
            144 => 
            array (
                'id' => 145,

                'description' => 'L&Y YAH MDR MADRID',
                'regional_id' => 3,
            ),
            145 => 
            array (
                'id' => 146,

                'description' => 'LLP BOG SAN VICTORINO CRA 10',
                'regional_id' => 3,
            ),
            146 => 
            array (
                'id' => 147,

                'description' => 'LLP VIL CC UNICENTRO',
                'regional_id' => 5,
            ),
            147 => 
            array (
                'id' => 148,

                'description' => 'YOI BOG CC GRAN PLAZA BOSA',
                'regional_id' => 5,
            ),
            148 => 
            array (
                'id' => 149,

                'description' => 'LLP BAQ CC VILLA COUNTRY L-233',
                'regional_id' => 2,
            ),
            149 => 
            array (
                'id' => 150,

                'description' => 'LLP GRA GRANADA CRA 14',
                'regional_id' => 5,
            ),
            150 => 
            array (
                'id' => 151,

                'description' => 'YAHAD IPIALES CENTRO CRA 5',
                'regional_id' => 4,
            ),
            151 => 
            array (
                'id' => 152,

                'description' => 'LLP BOG HIPER AMERICAS CLL 12',
                'regional_id' => 5,
            ),
            152 => 
            array (
                'id' => 153,

                'description' => 'YOI BAQ CC PORTAL DEL PRADO L-1-97-98',
                'regional_id' => 2,
            ),
            153 => 
            array (
                'id' => 154,

                'description' => 'LLP BOG CENTRO CARRERA 9',
                'regional_id' => 3,
            ),
            154 => 
            array (
                'id' => 155,

                'description' => 'LLP BOG GAITANA CRA 126A',
                'regional_id' => 3,
            ),
            155 => 
            array (
                'id' => 156,

                'description' => 'LLP GIR CC UNICENTRO L-2-32',
                'regional_id' => 5,
            ),
            156 => 
            array (
                'id' => 157,

                'description' => 'LLP SCH SOACHA COMPARTIR',
                'regional_id' => 5,
            ),
            157 => 
            array (
                'id' => 158,

                'description' => 'LLP BOG CC EL EDEN',
                'regional_id' => 5,
            ),
            158 => 
            array (
                'id' => 159,

                'description' => 'LLP VUP CC GUATAPURI',
                'regional_id' => 2,
            ),
            159 => 
            array (
                'id' => 160,

                'description' => 'YOI VUP AEROP ALFONSO LOPEZ',
                'regional_id' => 2,
            ),
            160 => 
            array (
                'id' => 161,

                'description' => 'YOI SMR EXITO BUENAVISTA',
                'regional_id' => 2,
            ),
            161 => 
            array (
                'id' => 162,

                'description' => 'LLP BOG LAS NIEVES CRA 7',
                'regional_id' => 5,
            ),
            162 => 
            array (
                'id' => 163,

                'description' => 'LLP CTG CC SAN FERNANDO L-1-21',
                'regional_id' => 2,
            ),
            163 => 
            array (
                'id' => 164,

                'description' => 'YOI BOG EXITO LA FELICIDAD',
                'regional_id' => 3,
            ),
            164 => 
            array (
                'id' => 165,

                'description' => 'LLP LPT LOS PATIOS AV 10',
                'regional_id' => 1,
            ),
            165 => 
            array (
                'id' => 166,

                'description' => 'LLP TUL LA HERRADURA',
                'regional_id' => 4,
            ),
            166 => 
            array (
                'id' => 167,

                'description' => 'LLP CUC CC UNICENTRO L-1-115 A',
                'regional_id' => 1,
            ),
            167 => 
            array (
                'id' => 168,

                'description' => 'L&Y YAHAD PPN CC CAM',
                'regional_id' => 4,
            ),
            168 => 
            array (
                'id' => 169,

                'description' => 'LLP BOG SANTA LIBRADA CRA 14',
                'regional_id' => 5,
            ),
            169 => 
            array (
                'id' => 170,

                'description' => 'YOI IPI CC GRAN PLAZA IPIALES L-206',
                'regional_id' => 4,
            ),
            170 => 
            array (
                'id' => 171,

                'description' => 'LLP BOG CC LA FLORESTA',
                'regional_id' => 3,
            ),
            171 => 
            array (
                'id' => 172,

                'description' => 'YOI BOG NUESTRO BOGOTA',
                'regional_id' => 3,
            ),
            172 => 
            array (
                'id' => 173,

                'description' => 'LLP SCH CC GRAN PLAZA SOACHA L-1-113',
                'regional_id' => 5,
            ),
            173 => 
            array (
                'id' => 174,

                'description' => 'LLP CTG LA PLAZUELA',
                'regional_id' => 2,
            ),
            174 => 
            array (
                'id' => 175,

                'description' => 'LLP BOG CC BULEVAR L-156',
                'regional_id' => 3,
            ),
            175 => 
            array (
                'id' => 176,

                'description' => 'YOI BOG EXITO CLL 170',
                'regional_id' => 3,
            ),
            176 => 
            array (
                'id' => 177,

                'description' => 'LLP BOG CEDRITOS CLL 140',
                'regional_id' => 3,
            ),
            177 => 
            array (
                'id' => 178,

                'description' => 'LLP IBE CENTRO CLL 15',
                'regional_id' => 5,
            ),
            178 => 
            array (
                'id' => 179,

                'description' => 'LILI&YOI YAHAD BOG CC CONNECTA',
                'regional_id' => 3,
            ),
            179 => 
            array (
                'id' => 180,

                'description' => 'LLP CLI CENTRO CLL 13 L-1-101-E',
                'regional_id' => 4,
            ),
            180 => 
            array (
                'id' => 181,

                'description' => 'LILI&YOI YAHAD BOG EVACUADOR AUTOSUR',
                'regional_id' => 5,
            ),
            181 => 
            array (
                'id' => 182,

                'description' => 'YOI EXITO BOG 20 DE JULIO',
                'regional_id' => 5,
            ),
            182 => 
            array (
                'id' => 183,

                'description' => 'LILI VLL CALI LA NAV',
                'regional_id' => 4,
            ),
            183 => 
            array (
                'id' => 184,

                'description' => 'LLP BOG MONTEVIDEO CLL 19 L-6',
                'regional_id' => 3,
            ),
            184 => 
            array (
                'id' => 185,

                'description' => 'YOI EXITO CABECERA BUCARAMANGA',
                'regional_id' => 1,
            ),
            185 => 
            array (
                'id' => 186,

                'description' => 'LLP MET VLL PORFIA',
                'regional_id' => 5,
            ),
            186 => 
            array (
                'id' => 187,

                'description' => 'LILIPINK BOG CC MICENTRO PORVENIR CARPA',
                'regional_id' => 5,
            ),
            187 => 
            array (
                'id' => 188,

                'description' => 'LLP CTG CC NAO L-28',
                'regional_id' => 2,
            ),
            188 => 
            array (
                'id' => 189,

                'description' => 'YOI BOY DUITAMA',
                'regional_id' => 3,
            ),
            189 => 
            array (
                'id' => 190,

                'description' => 'LILI&YOI YAHAD CTG CC EL BOSQUE',
                'regional_id' => 2,
            ),
            190 => 
            array (
                'id' => 191,

                'description' => 'LLP CHI LA LIBERTAD L-106-107',
                'regional_id' => 3,
            ),
            191 => 
            array (
                'id' => 192,

                'description' => 'LLP BOG CC PASEO DEL RIO L-244',
                'regional_id' => 5,
            ),
            192 => 
            array (
                'id' => 193,

                'description' => 'LILI&YOI YAHAD BOG VENECIA',
                'regional_id' => 5,
            ),
            193 => 
            array (
                'id' => 194,

                'description' => 'LLP VIL CC VIVA V/CENCIO L-152',
                'regional_id' => 5,
            ),
            194 => 
            array (
                'id' => 195,

                'description' => 'YOI CLI EXITO UNICENTRO',
                'regional_id' => 4,
            ),
            195 => 
            array (
                'id' => 196,

                'description' => 'LLP SOL CC CARNAVAL L-1121',
                'regional_id' => 2,
            ),
            196 => 
            array (
                'id' => 197,

                'description' => 'YOI BOG DIVERPLAZA BOGOTA',
                'regional_id' => 3,
            ),
            197 => 
            array (
                'id' => 198,

                'description' => 'LLP RCH CENTRO CRA 6',
                'regional_id' => 2,
            ),
            198 => 
            array (
                'id' => 199,

                'description' => 'YAHAD CUN FSG CENTRO',
                'regional_id' => 5,
            ),
            199 => 
            array (
                'id' => 200,

                'description' => 'LLP BOG 7 DE AGOSTO CRA 24',
                'regional_id' => 3,
            ),
            200 => 
            array (
                'id' => 201,

                'description' => 'LLP BOG CC MULTIPLAZA L-B-133',
                'regional_id' => 3,
            ),
            201 => 
            array (
                'id' => 202,

                'description' => 'LLP MDE CC DE MODA OUTLET L-N-106',
                'regional_id' => 1,
            ),
            202 => 
            array (
                'id' => 203,

                'description' => 'YOI BOG EXITO GRAN ESTACION',
                'regional_id' => 3,
            ),
            203 => 
            array (
                'id' => 204,

                'description' => 'LLP CUC CC JARDIN PLAZA L-74',
                'regional_id' => 1,
            ),
            204 => 
            array (
                'id' => 205,

                'description' => 'LILI&YOI YAHAD ANT MED CLL33',
                'regional_id' => 1,
            ),
            205 => 
            array (
                'id' => 206,

                'description' => 'LLP CLI CC UNICO L-509',
                'regional_id' => 4,
            ),
            206 => 
            array (
                'id' => 207,

                'description' => 'YOI EXITO VLL CLI PALMETTO',
                'regional_id' => 4,
            ),
            207 => 
            array (
                'id' => 208,

                'description' => 'LLP PTL CC SAN ANTONIO PLAZA L-182-183',
                'regional_id' => 5,
            ),
            208 => 
            array (
                'id' => 209,

                'description' => 'YOI BOG CENTRO COMERCIAL TUNAL',
                'regional_id' => 5,
            ),
            209 => 
            array (
                'id' => 210,

                'description' => 'LLP SMR CC BUENAVISTA L-107',
                'regional_id' => 2,
            ),
            210 => 
            array (
                'id' => 211,

                'description' => 'YOI EXITO BOG PLAZA DE BOLIVAR',
                'regional_id' => 3,
            ),
            211 => 
            array (
                'id' => 212,

                'description' => 'LLP BOG 20 DE JULIO CRA 6',
                'regional_id' => 5,
            ),
            212 => 
            array (
                'id' => 213,

                'description' => 'LLP CLI CC CHIPICHAPE L-213',
                'regional_id' => 4,
            ),
            213 => 
            array (
                'id' => 214,

                'description' => 'YOI GIR EXITO GIRARDOT',
                'regional_id' => 5,
            ),
            214 => 
            array (
                'id' => 215,

                'description' => 'LLP CLI SANTIAGO PLAZA CALI',
                'regional_id' => 4,
            ),
            215 => 
            array (
                'id' => 216,

                'description' => 'LLP BOG CC PLAZA CENTRAL L-208',
                'regional_id' => 5,
            ),
            216 => 
            array (
                'id' => 217,

                'description' => 'LLP BAQ CC UNICO L-73',
                'regional_id' => 2,
            ),
            217 => 
            array (
                'id' => 218,

                'description' => 'LLP CUC CC VENTURA PLAZA L-1-24',
                'regional_id' => 1,
            ),
            218 => 
            array (
                'id' => 219,

                'description' => 'YOI BOG CC PLAZA CENTRAL L-1-65',
                'regional_id' => 5,
            ),
            219 => 
            array (
                'id' => 220,

                'description' => 'LILI&YOI YAHAD CAL MZL CC MALLPLAZA',
                'regional_id' => 4,
            ),
            220 => 
            array (
                'id' => 221,

                'description' => 'LLP CLI CC NORTE L-17',
                'regional_id' => 4,
            ),
            221 => 
            array (
                'id' => 222,

                'description' => 'LILI&YOI YAHAD CUN CC CENTRO CHIA',
                'regional_id' => 3,
            ),
            222 => 
            array (
                'id' => 223,

                'description' => 'YOI BOG EXITO COUNTRY',
                'regional_id' => 3,
            ),
            223 => 
            array (
                'id' => 224,

                'description' => 'LLP BGA CC CARACOLI L336',
                'regional_id' => 1,
            ),
            224 => 
            array (
                'id' => 225,

                'description' => 'LLP BGA CC CACIQUE L-384-A',
                'regional_id' => 1,
            ),
            225 => 
            array (
                'id' => 226,

                'description' => 'YOI CUC AEROPUERTO CAMILO DAZA',
                'regional_id' => 1,
            ),
            226 => 
            array (
                'id' => 227,

                'description' => 'LLP BOG CHAPINERO CLL 60',
                'regional_id' => 3,
            ),
            227 => 
            array (
                'id' => 228,

                'description' => 'YOI BGA CALLE 37',
                'regional_id' => 1,
            ),
            228 => 
            array (
                'id' => 229,

                'description' => 'YOI TUL EXITO TULUA',
                'regional_id' => 4,
            ),
            229 => 
            array (
                'id' => 230,

                'description' => 'LLP PSO CC UNICENTRO L-151',
                'regional_id' => 4,
            ),
            230 => 
            array (
                'id' => 231,

                'description' => 'LLP BOG CC DIVER PLAZA L-26',
                'regional_id' => 3,
            ),
            231 => 
            array (
                'id' => 232,

                'description' => 'YOI BJA EXITO BARRANCABERMEJA',
                'regional_id' => 1,
            ),
            232 => 
            array (
                'id' => 233,

                'description' => 'YOI SCH CC GRAN PLAZA SOACHA L-1-163',
                'regional_id' => 5,
            ),
            233 => 
            array (
                'id' => 234,

                'description' => 'LLP BOG CLL 82 CRA 15',
                'regional_id' => 3,
            ),
            234 => 
            array (
                'id' => 235,

                'description' => 'LLP VIL CC UNICO L-32',
                'regional_id' => 5,
            ),
            235 => 
            array (
                'id' => 236,

                'description' => 'LLP ANT ITAGUI OUT',
                'regional_id' => 1,
            ),
            236 => 
            array (
                'id' => 237,

                'description' => 'LLP ARM CC PORTAL QUINDIO L-3-13-14',
                'regional_id' => 4,
            ),
            237 => 
            array (
                'id' => 238,

                'description' => 'LLP ARM CENTRO CRA 17',
                'regional_id' => 4,
            ),
            238 => 
            array (
                'id' => 239,

                'description' => 'LLP VUP CENTRO CLL 16 L-4',
                'regional_id' => 2,
            ),
            239 => 
            array (
                'id' => 240,

                'description' => 'YOI BGA CC LA QUINTA',
                'regional_id' => 1,
            ),
            240 => 
            array (
                'id' => 241,

                'description' => 'YOI VIL EXITO LA SABANA V/CENCIO',
                'regional_id' => 5,
            ),
            241 => 
            array (
                'id' => 242,

                'description' => 'LLP TNJ CC VIVA TUNJA L-128',
                'regional_id' => 3,
            ),
            242 => 
            array (
                'id' => 243,

                'description' => 'L&Y YAHAAD EXITO NIZA',
                'regional_id' => 3,
            ),
            243 => 
            array (
                'id' => 244,

                'description' => 'LLP VLT VILLETA CLL 5',
                'regional_id' => 3,
            ),
            244 => 
            array (
                'id' => 245,

                'description' => 'YOI BOG CC PORTAL 80 L-3-003',
                'regional_id' => 3,
            ),
            245 => 
            array (
                'id' => 246,

                'description' => 'LLP BOG BONANZA AV CLL 80',
                'regional_id' => 3,
            ),
            246 => 
            array (
                'id' => 247,

                'description' => 'LLP BOG CC TINTAL PLAZA L-119',
                'regional_id' => 5,
            ),
            247 => 
            array (
                'id' => 248,

                'description' => 'YOI PEI EXITO VICTORIA',
                'regional_id' => 4,
            ),
            248 => 
            array (
                'id' => 249,

                'description' => 'LLP NVA CC UNICO L-29',
                'regional_id' => 5,
            ),
            249 => 
            array (
                'id' => 250,

                'description' => 'LLP BAQ CC UNICO L-107',
                'regional_id' => 2,
            ),
            250 => 
            array (
                'id' => 251,

                'description' => 'LLP DQB CC UNICO L-32',
                'regional_id' => 4,
            ),
            251 => 
            array (
                'id' => 252,

                'description' => 'LLP VUP V/DUPAR',
                'regional_id' => 2,
            ),
            252 => 
            array (
                'id' => 253,

                'description' => 'YOI BOG CC PASEO DEL RIO L-245',
                'regional_id' => 5,
            ),
            253 => 
            array (
                'id' => 254,

                'description' => 'L&Y YAH IPI IPIALES',
                'regional_id' => 4,
            ),
            254 => 
            array (
                'id' => 255,

                'description' => 'LLP CTG CC LA CASTELLANA L-93-94',
                'regional_id' => 2,
            ),
            255 => 
            array (
                'id' => 256,

                'description' => 'LLP MDE PALACE',
                'regional_id' => 1,
            ),
            256 => 
            array (
                'id' => 257,

                'description' => 'YOI BAQ EXITO PANORAMA',
                'regional_id' => 2,
            ),
            257 => 
            array (
                'id' => 258,

                'description' => 'LLP BOG SANTA HELENITA AV CLL 68',
                'regional_id' => 3,
            ),
            258 => 
            array (
                'id' => 259,

                'description' => 'LILI&YOI YAHAD CUN FUNZA CENTRO',
                'regional_id' => 3,
            ),
            259 => 
            array (
                'id' => 260,

                'description' => 'YOI EXITO VALLE DE LILI CAL',
                'regional_id' => 4,
            ),
            260 => 
            array (
                'id' => 261,

                'description' => 'YOI PPN EXITO PANAMERICANA',
                'regional_id' => 4,
            ),
            261 => 
            array (
                'id' => 262,

                'description' => 'LLP BAQ CENTRO CLL 37',
                'regional_id' => 2,
            ),
            262 => 
            array (
                'id' => 263,

                'description' => 'DIR VENTAS NACIONALES SUR',
                'regional_id' => 4,
            ),
            263 => 
            array (
                'id' => 264,

                'description' => 'YAHAD NEIVA CC OASIS',
                'regional_id' => 5,
            ),
            264 => 
            array (
                'id' => 265,

                'description' => 'LLP FLA CC GRAN PLAZA FLORENCIA',
                'regional_id' => 5,
            ),
            265 => 
            array (
                'id' => 266,

                'description' => 'LLP CUC ATALAYA',
                'regional_id' => 1,
            ),
            266 => 
            array (
                'id' => 267,

                'description' => 'YOI MDE EXITO LAURELES MEDELLIN',
                'regional_id' => 1,
            ),
            267 => 
            array (
                'id' => 268,

                'description' => 'YOI VUP CC MAYALES',
                'regional_id' => 2,
            ),
            268 => 
            array (
                'id' => 269,

                'description' => 'LLP BOG FERIAS 2 BOGOTA',
                'regional_id' => 3,
            ),
            269 => 
            array (
                'id' => 270,

                'description' => 'LLP DQB CC EL PROGRESO',
                'regional_id' => 4,
            ),
            270 => 
            array (
                'id' => 271,

                'description' => 'LLP BOG CC SANTAFE L-1-201',
                'regional_id' => 3,
            ),
            271 => 
            array (
                'id' => 272,

                'description' => 'LLP BOG CC PARQUE COLINA L-320',
                'regional_id' => 3,
            ),
            272 => 
            array (
                'id' => 273,

                'description' => 'YOI CLI EXITO SIMON BOLIVAR',
                'regional_id' => 4,
            ),
            273 => 
            array (
                'id' => 274,

                'description' => 'L&Y BOG FONTIBON',
                'regional_id' => 3,
            ),
            274 => 
            array (
                'id' => 275,

                'description' => 'DIR CCIAL ZONA NORTE RETAIL',
                'regional_id' => 1,
            ),
            275 => 
            array (
                'id' => 276,

                'description' => 'LLP MDE CC PREMIUM PLAZA L-2302',
                'regional_id' => 1,
            ),
            276 => 
            array (
                'id' => 277,

                'description' => 'YOI BEL CC PLAZA FABRICATO BELLO',
                'regional_id' => 1,
            ),
            277 => 
            array (
                'id' => 278,

                'description' => 'YOI BOG EXITO SUBA',
                'regional_id' => 3,
            ),
            278 => 
            array (
                'id' => 279,

                'description' => 'LILIPINK NEIVA CC UNICO CARPA',
                'regional_id' => 2,
            ),
            279 => 
            array (
                'id' => 280,

                'description' => 'LLP BOG CC CENTRO MAYOR L-1-129',
                'regional_id' => 5,
            ),
            280 => 
            array (
                'id' => 281,

                'description' => 'LLP MZL CC FUNDADORES L-308',
                'regional_id' => 4,
            ),
            281 => 
            array (
                'id' => 282,

                'description' => 'YOI SMR AEROP SIMON',
                'regional_id' => 2,
            ),
            282 => 
            array (
                'id' => 283,

                'description' => 'L&Y YAHAD ANT PARQUE ITAGUI OUTLET',
                'regional_id' => 1,
            ),
            283 => 
            array (
                'id' => 284,

                'description' => 'YOI MZL EXITO SANCANCIO',
                'regional_id' => 4,
            ),
            284 => 
            array (
                'id' => 285,

                'description' => 'YOI CTG EXITO SAN DIEGO',
                'regional_id' => 2,
            ),
            285 => 
            array (
                'id' => 286,

                'description' => 'LLP IPI CC GRAN PLAZA IPIALES L-118',
                'regional_id' => 4,
            ),
            286 => 
            array (
                'id' => 287,

                'description' => 'LLP PLM CC LLANO GRANDE',
                'regional_id' => 4,
            ),
            287 => 
            array (
                'id' => 288,

                'description' => 'LLP MDE CC MALL GUAYABAL L-04',
                'regional_id' => 1,
            ),
            288 => 
            array (
                'id' => 289,

                'description' => 'LLP IPI ESTRELLA PRINCIPAL',
                'regional_id' => 4,
            ),
            289 => 
            array (
                'id' => 290,

                'description' => 'LLP BOG CC PLAZA DE LAS AMERICAS',
                'regional_id' => 5,
            ),
            290 => 
            array (
                'id' => 291,

                'description' => 'YOI BOG EXITO FLORESTA',
                'regional_id' => 3,
            ),
            291 => 
            array (
                'id' => 292,

                'description' => 'YOI ATQ EXITO CAUCASIA',
                'regional_id' => 2,
            ),
            292 => 
            array (
                'id' => 293,

                'description' => 'LILIPINK SANTA MARTA CENTRO LOWCOST',
                'regional_id' => 2,
            ),
            293 => 
            array (
                'id' => 294,

                'description' => 'YOI BGA EXITO ORIENTAL CACIQUE',
                'regional_id' => 1,
            ),
            294 => 
            array (
                'id' => 295,

                'description' => 'LLP BAQ CC VIVA B/QUILLA L-340',
                'regional_id' => 2,
            ),
            295 => 
            array (
                'id' => 296,

                'description' => 'LLP SCJ VIVA SINCELEJO',
                'regional_id' => 2,
            ),
            296 => 
            array (
                'id' => 297,

                'description' => 'YOI PSO EXITO PANAMERICANA',
                'regional_id' => 4,
            ),
            297 => 
            array (
                'id' => 298,

                'description' => 'LLP BOG GALERIAS CLL 53 L-102',
                'regional_id' => 3,
            ),
            298 => 
            array (
                'id' => 299,

                'description' => 'LLP CLI CC UNICO L-12C',
                'regional_id' => 4,
            ),
            299 => 
            array (
                'id' => 300,

                'description' => 'YOI SCJ EXITO CENTRO',
                'regional_id' => 2,
            ),
            300 => 
            array (
                'id' => 301,

                'description' => 'YOI BOG EXITO COLINA',
                'regional_id' => 3,
            ),
            301 => 
            array (
                'id' => 302,

                'description' => 'LLP SCJ CC GUACARI',
                'regional_id' => 2,
            ),
            302 => 
            array (
                'id' => 303,

                'description' => 'YOI BOG CC GRAN PLAZA ENSUE?O L-159',
                'regional_id' => 5,
            ),
            303 => 
            array (
                'id' => 304,

                'description' => 'YOI BAQ EXITO CALLE 77',
                'regional_id' => 2,
            ),
            304 => 
            array (
                'id' => 305,

                'description' => 'LLP BOG SAN ANDRESITO SAN JOSE',
                'regional_id' => 3,
            ),
            305 => 
            array (
                'id' => 306,

                'description' => 'LLP MDE CC AVENTURA L-254',
                'regional_id' => 1,
            ),
            306 => 
            array (
                'id' => 307,

                'description' => 'LILI&YOI YAHAAD CDB MON CLL13',
                'regional_id' => 2,
            ),
            307 => 
            array (
                'id' => 308,

                'description' => 'LLP TNJ CENTRO CLL 18',
                'regional_id' => 3,
            ),
            308 => 
            array (
                'id' => 309,

                'description' => 'LLP IBE CC ACQUA L-203-204',
                'regional_id' => 5,
            ),
            309 => 
            array (
                'id' => 310,

                'description' => 'LLP SCH CENTRO L-36 A',
                'regional_id' => 5,
            ),
            310 => 
            array (
                'id' => 311,

                'description' => 'LLP CTG CC BOCAGRANDE L-4-5',
                'regional_id' => 2,
            ),
            311 => 
            array (
                'id' => 312,

                'description' => 'YOI VUP EXITO VALLEDUPAR CENTRO',
                'regional_id' => 2,
            ),
            312 => 
            array (
                'id' => 313,

                'description' => 'LLP CHI CENTRO L-102',
                'regional_id' => 3,
            ),
            313 => 
            array (
                'id' => 314,

                'description' => 'LLP BJA CC SAN SILVESTRE L-214-215',
                'regional_id' => 1,
            ),
            314 => 
            array (
                'id' => 315,

                'description' => 'LLP APO CC NUESTRO URABA',
                'regional_id' => 2,
            ),
            315 => 
            array (
                'id' => 316,

                'description' => 'YOI MZL EXITO FUNDADORES',
                'regional_id' => 4,
            ),
            316 => 
            array (
                'id' => 317,

                'description' => 'YOI BGA AEROPUERTO PALONEGRO BUC',
                'regional_id' => 1,
            ),
            317 => 
            array (
                'id' => 318,

                'description' => 'YOI BOG EXITO USME',
                'regional_id' => 5,
            ),
            318 => 
            array (
                'id' => 319,

                'description' => 'LLP BOG CHICO CLL 93',
                'regional_id' => 3,
            ),
            319 => 
            array (
                'id' => 320,

                'description' => 'YOI BOG EXITO LAS NIEVES',
                'regional_id' => 3,
            ),
            320 => 
            array (
                'id' => 321,

                'description' => 'L&Y BUC CLL36',
                'regional_id' => 1,
            ),
            321 => 
            array (
                'id' => 322,

                'description' => 'LLP SOL CC NUESTRO ATLANTICO L-1013',
                'regional_id' => 2,
            ),
            322 => 
            array (
                'id' => 323,

                'description' => 'YOI RCH EXITO VIVA WAAJIRA',
                'regional_id' => 2,
            ),
            323 => 
            array (
                'id' => 324,

                'description' => 'YOI CTG CARIBE PLAZA',
                'regional_id' => 2,
            ),
            324 => 
            array (
                'id' => 325,

                'description' => 'LLP SNT CC POBLADO PLAZA L-20-21',
                'regional_id' => 2,
            ),
            325 => 
            array (
                'id' => 326,

                'description' => 'YOI CUC CC JARDIN PLAZA',
                'regional_id' => 1,
            ),
            326 => 
            array (
                'id' => 327,

                'description' => 'YOI BOG EXITO AMERICAS',
                'regional_id' => 5,
            ),
            327 => 
            array (
                'id' => 328,

                'description' => 'YOI EXITO ANT MEDELLIN MOLINOS',
                'regional_id' => 1,
            ),
            328 => 
            array (
                'id' => 329,

                'description' => 'LLP PEI CC ARBOLEDA L-132A',
                'regional_id' => 4,
            ),
            329 => 
            array (
                'id' => 330,

                'description' => 'LLP BOG CC CIUDAD TUNAL L-1051',
                'regional_id' => 5,
            ),
            330 => 
            array (
                'id' => 331,

                'description' => 'LLP BEL BELLO CLL 51',
                'regional_id' => 1,
            ),
            331 => 
            array (
                'id' => 332,

                'description' => 'YOI BOG CC ATLANTIS L-101-102',
                'regional_id' => 3,
            ),
            332 => 
            array (
                'id' => 333,

                'description' => 'LLP BOG JAVERIANA CLL 41',
                'regional_id' => 3,
            ),
            333 => 
            array (
                'id' => 334,

                'description' => 'L&Y NDS CUC CLL12',
                'regional_id' => 1,
            ),
            334 => 
            array (
                'id' => 335,

                'description' => 'LLP BOG CC UNICENTRO DE OCCIDENTE L-130',
                'regional_id' => 3,
            ),
            335 => 
            array (
                'id' => 336,

                'description' => 'LLP CEJ CC VIVA LA CEJA',
                'regional_id' => 1,
            ),
            336 => 
            array (
                'id' => 337,

                'description' => 'LLP BOG NUESTRO BOGOTA',
                'regional_id' => 3,
            ),
            337 => 
            array (
                'id' => 338,

                'description' => 'LLP BOG VENECIA CRA 53',
                'regional_id' => 5,
            ),
            338 => 
            array (
                'id' => 339,

                'description' => 'LLP NVA CC SANTA LUCIA L-2-46',
                'regional_id' => 5,
            ),
            339 => 
            array (
                'id' => 340,

                'description' => 'LLP RNG CC SAN NICOLAS L-3307',
                'regional_id' => 1,
            ),
            340 => 
            array (
                'id' => 341,

                'description' => 'LLP CUN ZIP MEGACITY',
                'regional_id' => 3,
            ),
            341 => 
            array (
                'id' => 342,

                'description' => 'LLP BOG CC PORTAL 80 L-N-2023',
                'regional_id' => 3,
            ),
            342 => 
            array (
                'id' => 343,

                'description' => 'LLP MDR CC CASA BLANCA',
                'regional_id' => 3,
            ),
            343 => 
            array (
                'id' => 344,

                'description' => 'LLP BOG CC SAN RAFAEL',
                'regional_id' => 3,
            ),
            344 => 
            array (
                'id' => 345,

                'description' => 'LLP SMR CC OCEAN MALL',
                'regional_id' => 2,
            ),
            345 => 
            array (
                'id' => 346,

                'description' => 'LLP BAQ PRADO CLL 72 L-9',
                'regional_id' => 2,
            ),
            346 => 
            array (
                'id' => 347,

                'description' => 'LLP SOL CC PLAZA DEL SOL L-150',
                'regional_id' => 2,
            ),
            347 => 
            array (
                'id' => 348,

                'description' => 'YOI BOG EXITO CALLE 80',
                'regional_id' => 3,
            ),
            348 => 
            array (
                'id' => 349,

                'description' => 'LLP BEL CC PUERTA DEL NORTE',
                'regional_id' => 1,
            ),
            349 => 
            array (
                'id' => 350,

                'description' => 'YOI PLM CC LLANOGRANDE PALMIRA',
                'regional_id' => 4,
            ),
            350 => 
            array (
                'id' => 351,

                'description' => 'LLP MDE CENTRO JUNIN',
                'regional_id' => 1,
            ),
            351 => 
            array (
                'id' => 352,

                'description' => 'LLP PSO CENTRO CLL 18',
                'regional_id' => 4,
            ),
            352 => 
            array (
                'id' => 353,

                'description' => 'YOI EXITO CUBA PEREIRA',
                'regional_id' => 4,
            ),
            353 => 
            array (
                'id' => 354,

                'description' => 'LLP BOG CC MILENIO L-130',
                'regional_id' => 5,
            ),
            354 => 
            array (
                'id' => 355,

                'description' => 'LLP CRC CC NUESTRO CARTAGO L-1-42A-42B',
                'regional_id' => 4,
            ),
            355 => 
            array (
                'id' => 356,

                'description' => 'LILI&YOI YAHAD EXITO BOG MODELIA',
                'regional_id' => 3,
            ),
            356 => 
            array (
                'id' => 357,

                'description' => 'YOI FLA EXITO FLORENCIA CENTRO',
                'regional_id' => 5,
            ),
            357 => 
            array (
                'id' => 358,

                'description' => 'YOI CLI EXITO CHIPICHAPE',
                'regional_id' => 4,
            ),
            358 => 
            array (
                'id' => 359,

                'description' => 'LLP YBO CC UNICO L-6',
                'regional_id' => 4,
            ),
            359 => 
            array (
                'id' => 360,

                'description' => 'LLP BOG CC HAYUELOS JUMBO L-2001',
                'regional_id' => 3,
            ),
            360 => 
            array (
                'id' => 361,

                'description' => 'YOI BOG EXITO SALITRE PLAZA',
                'regional_id' => 3,
            ),
            361 => 
            array (
                'id' => 362,

                'description' => 'LLP ARM CC PORTAL QUINDIO L-1-04',
                'regional_id' => 4,
            ),
            362 => 
            array (
                'id' => 363,

                'description' => 'YOI BAQ CC UNICO BARRANQUILLA',
                'regional_id' => 2,
            ),
            363 => 
            array (
                'id' => 364,

                'description' => 'LLP VIL LIA SECTOR EL STEREO L-2',
                'regional_id' => 5,
            ),
            364 => 
            array (
                'id' => 365,

                'description' => 'YOI CTG EXITO EJECUTIVOS CARTAGENA',
                'regional_id' => 2,
            ),
            365 => 
            array (
                'id' => 366,

                'description' => 'LLP BGA CC COSMOCENTRO L-101-102-103-104',
                'regional_id' => 1,
            ),
            366 => 
            array (
                'id' => 367,

                'description' => 'LLP SCH CC MERCURIO L-206',
                'regional_id' => 5,
            ),
            367 => 
            array (
                'id' => 368,

                'description' => 'YOI RIS DQ CC PROGRE',
                'regional_id' => 4,
            ),
            368 => 
            array (
                'id' => 369,

                'description' => 'LLP BAQ CC PORTAL DEL PRADO L-5',
                'regional_id' => 2,
            ),
            369 => 
            array (
                'id' => 370,

                'description' => 'YOI BAQ VIVA BARRANQUILLA',
                'regional_id' => 2,
            ),
            370 => 
            array (
                'id' => 371,

                'description' => 'L&Y BOG CALIMA L-B-051-053-055-057',
                'regional_id' => 3,
            ),
            371 => 
            array (
                'id' => 372,

                'description' => 'LLP CLI CC LIMONAR L-134-135',
                'regional_id' => 4,
            ),
            372 => 
            array (
                'id' => 373,

                'description' => 'LLP BOG CC PLAZA CENTRAL L-3-67-3-68',
                'regional_id' => 5,
            ),
            373 => 
            array (
                'id' => 374,

                'description' => 'YOI PEI EXITO PARQUE ARBOLEDA',
                'regional_id' => 4,
            ),
            374 => 
            array (
                'id' => 375,

                'description' => 'YOI BGA CC CARACOLI',
                'regional_id' => 1,
            ),
            375 => 
            array (
                'id' => 376,

                'description' => 'YOI FLA CC GRANPZFLORENCIA L-244-245-246',
                'regional_id' => 5,
            ),
            376 => 
            array (
                'id' => 377,

                'description' => 'YOI BGA EXITO LA ROSITA',
                'regional_id' => 1,
            ),
            377 => 
            array (
                'id' => 378,

                'description' => 'LLP APO CC PLAZA DEL RIO L-123',
                'regional_id' => 2,
            ),
            378 => 
            array (
                'id' => 379,

                'description' => 'LLP BOG CC FACTORY L-1-38',
                'regional_id' => 5,
            ),
            379 => 
            array (
                'id' => 380,

                'description' => 'LLP CLI LOW COST BOLIVARIANO',
                'regional_id' => 4,
            ),
            380 => 
            array (
                'id' => 381,

                'description' => 'LLP MTR CC ALAMEDAS L-A-191',
                'regional_id' => 2,
            ),
            381 => 
            array (
                'id' => 382,

                'description' => 'LLP IPI ESTRELLA EXPRESS',
                'regional_id' => 4,
            ),
            382 => 
            array (
                'id' => 383,

                'description' => 'LLP BAQ CC METROPOLITANO L-203',
                'regional_id' => 2,
            ),
        ));
        
        
    }
}