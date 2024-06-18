<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tiendas')->delete();
        
        \DB::table('tiendas')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'description' => 'LILIPINK CC UNICENTRO TUNJA',
                'regional_id' => 3,
                'hanna' => 1003,
            ),
            1 => 
            array (
                'id' => 2,
        
                'description' => 'LILIPINK CC UNICENTRO CUCUTA',
                'regional_id' => 1,
                'hanna' => 1006,
            ),
            2 => 
            array (
                'id' => 3,
                
                'description' => 'LILIPINK CC UNICENTRO CUCUTA',
                'regional_id' => 2,
                'hanna' => 1008,
            ),
            3 => 
            array (
                'id' => 4,
                
                'description' => 'LILIPINK CC UNICO LC 73 BARRANQUILL',
                'regional_id' => 2,
                'hanna' => 1009,
            ),
            4 => 
            array (
                'id' => 5,
                
                'description' => 'LILIPINK CC UNICENTRO PEREIRA',
                'regional_id' => 4,
                'hanna' => 1011,
            ),
            5 => 
            array (
                'id' => 6,
                
                'description' => 'LILIPINK CC LIMONAR CALI',
                'regional_id' => 4,
                'hanna' => 1013,
            ),
            6 => 
            array (
                'id' => 7,
                
                'description' => 'LILIPINK CC UNICENTRO PASTO',
                'regional_id' => 4,
                'hanna' => 1014,
            ),
            7 => 
            array (
                'id' => 8,
                
                'description' => 'LILIPINK CENTRO SOACHA',
                'regional_id' => 5,
                'hanna' => 1015,
            ),
            8 => 
            array (
                'id' => 9,
                
                'description' => 'LILIPINK CC CENTRO MAYOR BOGOTA',
                'regional_id' => 5,
                'hanna' => 1016,
            ),
            9 => 
            array (
                'id' => 10,
                
                'description' => 'LILIPINK CC SANTAFE MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1018,
            ),
            10 => 
            array (
                'id' => 11,
                
                'description' => 'LILIPINK CHAPINERO CLL 60 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1019,
            ),
            11 => 
            array (
                'id' => 12,
                
                'description' => 'LILIPINK CENTRO CRA 15 ARMENIA',
                'regional_id' => 4,
                'hanna' => 1023,
            ),
            12 => 
            array (
                'id' => 13,
                
                'description' => 'LILIPINK CC PORTAL 80 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1024,
            ),
            13 => 
            array (
                'id' => 14,
                
                'description' => 'LILIPINK CENTRO JUNIN MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1026,
            ),
            14 => 
            array (
                'id' => 15,
                
                'description' => 'LILIPINK CC CIUDAD TUNAL BOGOTA',
                'regional_id' => 5,
                'hanna' => 1027,
            ),
            15 => 
            array (
                'id' => 16,
                
                'description' => 'LILIPINK CC METROPOLITANO BARRANQUI',
                'regional_id' => 2,
                'hanna' => 1028,
            ),
            16 => 
            array (
                'id' => 17,
                
                'description' => 'LILIPINK CC SAN PEDRO NEIVA',
                'regional_id' => 5,
                'hanna' => 1029,
            ),
            17 => 
            array (
                'id' => 18,
                
                'description' => 'LILIPINK CC EL PROGRESO PEREIRA',
                'regional_id' => 4,
                'hanna' => 1030,
            ),
            18 => 
            array (
                'id' => 19,
                
                'description' => 'LILIPINK CC OCEAN MALL SANTA MARTA',
                'regional_id' => 2,
                'hanna' => 1031,
            ),
            19 => 
            array (
                'id' => 20,
                
                'description' => 'LILIPINK CC PORTAL QUINDIO LC3-11-1',
                'regional_id' => 4,
                'hanna' => 1032,
            ),
            20 => 
            array (
                'id' => 21,
                
                'description' => 'LILIPINK RESTREPO CLL 18 SUR BOGOTA',
                'regional_id' => 5,
                'hanna' => 1033,
            ),
            21 => 
            array (
                'id' => 22,
                
                'description' => 'LILIPINK CC SAN ANTONIO PLAZA PITAL',
                'regional_id' => 5,
                'hanna' => 1034,
            ),
            22 => 
            array (
                'id' => 23,
                
                'description' => 'LILIPINK BELLO CLL 51 BELLO',
                'regional_id' => 1,
                'hanna' => 1035,
            ),
            23 => 
            array (
                'id' => 24,
                
                'description' => 'LILIPINK CC UNICO LC 26 PASTO',
                'regional_id' => 4,
                'hanna' => 1036,
            ),
            24 => 
            array (
                'id' => 25,
                
                'description' => 'LILIPINK CEDRITOS CLL 140 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1038,
            ),
            25 => 
            array (
                'id' => 26,
                
                'description' => 'LILIPINK CC FUNDADORES MANIZALES',
                'regional_id' => 4,
                'hanna' => 1040,
            ),
            26 => 
            array (
                'id' => 27,
                
                'description' => 'LILIPINK JAVERIANA CLL 41 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1044,
            ),
            27 => 
            array (
                'id' => 28,
                
                'description' => 'LILIPINK CC ALAMEDAS MONTERIA',
                'regional_id' => 2,
                'hanna' => 1046,
            ),
            28 => 
            array (
                'id' => 29,
                
                'description' => 'LILIPINK CC UNICO LC 6 YUMBO',
                'regional_id' => 4,
                'hanna' => 1050,
            ),
            29 => 
            array (
                'id' => 30,
                
                'description' => 'LILIPINK CC UNICO LC 32 VILLAVICENC',
                'regional_id' => 5,
                'hanna' => 1053,
            ),
            30 => 
            array (
                'id' => 31,
                
                'description' => 'LILIPINK CC CARACOLI BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 1054,
            ),
            31 => 
            array (
                'id' => 32,
                
                'description' => 'LILIPINK CC GRAN PLAZA FLORENCIA',
                'regional_id' => 5,
                'hanna' => 1055,
            ),
            32 => 
            array (
                'id' => 33,
                
                'description' => 'LILIPINK CC POBLADO PLAZA SANTO TOM',
                'regional_id' => 2,
                'hanna' => 1056,
            ),
            33 => 
            array (
                'id' => 34,
                
                'description' => 'LILIPINK HIPER AMERICAS CLL 12 BOGO',
                'regional_id' => 5,
                'hanna' => 1057,
            ),
            34 => 
            array (
                'id' => 35,
                
                'description' => 'LILIPINK CLL 82 CRA 15 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1059,
            ),
            35 => 
            array (
                'id' => 36,
                
                'description' => 'LILIPINK CC NAO CARTAGENA',
                'regional_id' => 2,
                'hanna' => 1060,
            ),
            36 => 
            array (
                'id' => 37,
                
                'description' => 'LILIPINK CC PALMETO PLAZA CALI',
                'regional_id' => 4,
                'hanna' => 1061,
            ),
            37 => 
            array (
                'id' => 38,
                
                'description' => 'LILIPINK CC UNICENTRO YOPAL',
                'regional_id' => 5,
                'hanna' => 1062,
            ),
            38 => 
            array (
                'id' => 39,
                
                'description' => 'LILIPINK CC MAYALES VALLEDUPAR',
                'regional_id' => 2,
                'hanna' => 1063,
            ),
            39 => 
            array (
                'id' => 40,
                
                'description' => 'LILIPINK CC ZAZUE SANTA MARTA',
                'regional_id' => 2,
                'hanna' => 1064,
            ),
            40 => 
            array (
                'id' => 41,
                
                'description' => 'LILIPINK CC UNICENTRO PALMIRA',
                'regional_id' => 4,
                'hanna' => 1065,
            ),
            41 => 
            array (
                'id' => 42,
                
                'description' => 'LILIPINK CC SAN FERNANDO CARTAGENA',
                'regional_id' => 2,
                'hanna' => 1066,
            ),
            42 => 
            array (
                'id' => 43,
                
                'description' => 'LILIPINK CC MERCURIO BOGOTA',
                'regional_id' => 5,
                'hanna' => 1067,
            ),
            43 => 
            array (
                'id' => 44,
                
                'description' => 'LILIPINK CC TINTAL PLAZA BOGOTA',
                'regional_id' => 5,
                'hanna' => 1068,
            ),
            44 => 
            array (
                'id' => 45,
                
                'description' => 'LILIPINK CC ACROPOLIS BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 1069,
            ),
            45 => 
            array (
                'id' => 46,
                
                'description' => 'LILIPINK CC FACTORY BOGOTA',
                'regional_id' => 5,
                'hanna' => 1071,
            ),
            46 => 
            array (
                'id' => 47,
                
                'description' => 'LILIPINK CENTRO CLL 13 CALI',
                'regional_id' => 4,
                'hanna' => 1072,
            ),
            47 => 
            array (
                'id' => 48,
                
                'description' => 'LILIPINK CENTRO CRA 6 PEREIRA',
                'regional_id' => 4,
                'hanna' => 1073,
            ),
            48 => 
            array (
                'id' => 49,
                
                'description' => 'LILIPINK KENNEDY CLL 37 SUR BOGOTA',
                'regional_id' => 5,
                'hanna' => 1074,
            ),
            49 => 
            array (
                'id' => 50,
                
                'description' => 'LILIPINK CC VIVA V/CENCIO VILLAVICE',
                'regional_id' => 5,
                'hanna' => 1076,
            ),
            50 => 
            array (
                'id' => 51,
                
                'description' => 'LILIPINK CENTRO CLL 15 IBAGUE',
                'regional_id' => 5,
                'hanna' => 1077,
            ),
            51 => 
            array (
                'id' => 52,
                
                'description' => 'LILIPINK LA LIBERTAD CHIA',
                'regional_id' => 3,
                'hanna' => 1078,
            ),
            52 => 
            array (
                'id' => 53,
                
                'description' => 'LILIPINK CC ARBOLEDA PEREIRA',
                'regional_id' => 4,
                'hanna' => 1079,
            ),
            53 => 
            array (
                'id' => 54,
                
                'description' => 'LILIPINK CC TREBOLIS BOGOTA',
                'regional_id' => 5,
                'hanna' => 1080,
            ),
            54 => 
            array (
                'id' => 55,
                
                'description' => 'LILIPINK CC GRAN PLAZA IPIALES IPIA',
                'regional_id' => 4,
                'hanna' => 1081,
            ),
            55 => 
            array (
                'id' => 56,
                
                'description' => 'LILIPINK CC SAN NICOLAS RIONEGRO',
                'regional_id' => 1,
                'hanna' => 1082,
            ),
            56 => 
            array (
                'id' => 57,
                
                'description' => 'LILIPINK CC UNICENTRO GIRARDOT',
                'regional_id' => 5,
                'hanna' => 1083,
            ),
            57 => 
            array (
                'id' => 58,
                
                'description' => 'LILIPINK CC LA FLORESTA BOGOTA',
                'regional_id' => 3,
                'hanna' => 1085,
            ),
            58 => 
            array (
                'id' => 59,
                
                'description' => 'LILIPINK CC LA CUESTA BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 1086,
            ),
            59 => 
            array (
                'id' => 60,
                
                'description' => 'LILIPINK CC SANTAFE BOGOTA',
                'regional_id' => 3,
                'hanna' => 1087,
            ),
            60 => 
            array (
                'id' => 61,
                
                'description' => 'LILIPINK CC ACQUA IBAGUE',
                'regional_id' => 5,
                'hanna' => 1088,
            ),
            61 => 
            array (
                'id' => 62,
                
                'description' => 'LILIPINK CC HAYUELOS JUMBO BOGOTA',
                'regional_id' => 3,
                'hanna' => 1089,
            ),
            62 => 
            array (
                'id' => 63,
                
                'description' => 'LILIPINK CC LA ESTACION IBAGUE',
                'regional_id' => 5,
                'hanna' => 1090,
            ),
            63 => 
            array (
                'id' => 64,
                
                'description' => 'LILIPINK GRANADA CRA 14 GRANADA',
                'regional_id' => 5,
                'hanna' => 1091,
            ),
            64 => 
            array (
                'id' => 65,
                
                'description' => 'LILIPINK 20 DE JULIO CRA 6 BOGOTA',
                'regional_id' => 5,
                'hanna' => 1092,
            ),
            65 => 
            array (
                'id' => 66,
                
                'description' => 'LILIPINK CC NORTE LC 17 CALI',
                'regional_id' => 4,
                'hanna' => 1093,
            ),
            66 => 
            array (
                'id' => 67,
                
                'description' => 'LILIPINK VENECIA CRA 53 BOGOTA',
                'regional_id' => 5,
                'hanna' => 1094,
            ),
            67 => 
            array (
                'id' => 68,
                
                'description' => 'LILIPINK CENTRO CLL 18 TUNJA',
                'regional_id' => 3,
                'hanna' => 1097,
            ),
            68 => 
            array (
                'id' => 69,
                
                'description' => 'LILIPINK CENTRO CLL 18 PASTO',
                'regional_id' => 4,
                'hanna' => 1099,
            ),
            69 => 
            array (
                'id' => 70,
                
                'description' => 'LILIPINK CC VENTURA PLAZA CUCUTA',
                'regional_id' => 1,
                'hanna' => 1100,
            ),
            70 => 
            array (
                'id' => 71,
                
                'description' => 'LILIPINK CC MEGAMALL BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 1101,
            ),
            71 => 
            array (
                'id' => 72,
                
                'description' => 'LILIPINK CC CALIMA PEREIRA',
                'regional_id' => 4,
                'hanna' => 1102,
            ),
            72 => 
            array (
                'id' => 73,
                
                'description' => 'LILIPINK CC NUESTRO URABA APARTADO',
                'regional_id' => 2,
                'hanna' => 1103,
            ),
            73 => 
            array (
                'id' => 74,
                
                'description' => 'LILIPINK GAITANA CRA 126A BOGOTA',
                'regional_id' => 3,
                'hanna' => 1104,
            ),
            74 => 
            array (
                'id' => 75,
                
                'description' => 'LILIPINK CC UNICO LC 29 NEIVA',
                'regional_id' => 5,
                'hanna' => 1105,
            ),
            75 => 
            array (
                'id' => 76,
                
                'description' => 'LILIPINK CC CALIMA LA 14 CALI',
                'regional_id' => 4,
                'hanna' => 1106,
            ),
            76 => 
            array (
                'id' => 77,
                
                'description' => 'LILIPINK MAYORCA ETAPA 2 SABANETA',
                'regional_id' => 1,
                'hanna' => 1107,
            ),
            77 => 
            array (
                'id' => 78,
                
                'description' => 'LILIPINK CC UNICO LC 509 CALI',
                'regional_id' => 4,
                'hanna' => 1108,
            ),
            78 => 
            array (
                'id' => 79,
                
                'description' => 'LILIPINK CC VIVA WAAJIRA RIOHACHA',
                'regional_id' => 2,
                'hanna' => 1109,
            ),
            79 => 
            array (
                'id' => 80,
                
                'description' => 'LILIPINK CC LIBERTADORES LC 102 DUI',
                'regional_id' => 3,
                'hanna' => 1111,
            ),
            80 => 
            array (
                'id' => 81,
                
                'description' => 'LILIPINK CC DIVER PLAZA BOGOTA',
                'regional_id' => 3,
                'hanna' => 1113,
            ),
            81 => 
            array (
                'id' => 82,
                
                'description' => 'LILIPINK CENTRO CHIA',
                'regional_id' => 3,
                'hanna' => 1114,
            ),
            82 => 
            array (
                'id' => 83,
                
                'description' => 'LILIPINK GALERIAS CLL 53 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1115,
            ),
            83 => 
            array (
                'id' => 84,
                
                'description' => 'LILIPINK BONANZA AV CLL 80 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1117,
            ),
            84 => 
            array (
                'id' => 85,
                
                'description' => 'LILIPINK QUIRIGUA TRV 94 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1118,
            ),
            85 => 
            array (
                'id' => 86,
                
                'description' => 'LILIPINK CENTRO CRA 9 PEREIRA',
                'regional_id' => 4,
                'hanna' => 1121,
            ),
            86 => 
            array (
                'id' => 87,
                
                'description' => 'LILIPINK SAN ANDRESITO SAN JOSE BOG',
                'regional_id' => 3,
                'hanna' => 1122,
            ),
            87 => 
            array (
                'id' => 88,
                
                'description' => 'LILIPINK CC ARRECIFE SANTA MARTA',
                'regional_id' => 2,
                'hanna' => 1123,
            ),
            88 => 
            array (
                'id' => 89,
                
                'description' => 'LILIPINK CC UNICENTRO VILLAVICENCIO',
                'regional_id' => 5,
                'hanna' => 1124,
            ),
            89 => 
            array (
                'id' => 90,
                
                'description' => 'LILIPINK CC CACIQUE BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 1125,
            ),
            90 => 
            array (
                'id' => 91,
                
                'description' => 'LILIPINK CC SANTA LUCIA NEIVA',
                'regional_id' => 5,
                'hanna' => 1127,
            ),
            91 => 
            array (
                'id' => 92,
                
                'description' => 'LILIPINK CC VIVA LA CEJA LA CEJA',
                'regional_id' => 1,
                'hanna' => 1128,
            ),
            92 => 
            array (
                'id' => 93,
                
                'description' => 'LILIPINK CC PLAZA CENTRAL LC 367-36',
                'regional_id' => 5,
                'hanna' => 1129,
            ),
            93 => 
            array (
                'id' => 94,
                
                'description' => 'LILIPINK CC GRAN PLAZA SOACHA BOGOT',
                'regional_id' => 5,
                'hanna' => 1130,
            ),
            94 => 
            array (
                'id' => 95,
                
                'description' => 'LILIPINK CC VIVA B/QUILLA BARRANQUI',
                'regional_id' => 2,
                'hanna' => 1133,
            ),
            95 => 
            array (
                'id' => 96,
                
                'description' => 'LILIPINK CC UNICO LC 12C CALI',
                'regional_id' => 4,
                'hanna' => 1134,
            ),
            96 => 
            array (
                'id' => 97,
                
                'description' => 'LILIPINK CC PARQUE COLINA BOGOTA',
                'regional_id' => 3,
                'hanna' => 1135,
            ),
            97 => 
            array (
                'id' => 98,
                
                'description' => 'LILIPINK CALDAS CRA 49 CALDAS',
                'regional_id' => 1,
                'hanna' => 1137,
            ),
            98 => 
            array (
                'id' => 99,
                
                'description' => 'LILIPINK CC COSMOCENTRO BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 1140,
            ),
            99 => 
            array (
                'id' => 100,
                
                'description' => 'LILIPINK CC MALLPLAZA CARTAGENA',
                'regional_id' => 2,
                'hanna' => 1142,
            ),
            100 => 
            array (
                'id' => 101,
                
                'description' => 'LILIPINK CC NUESTRO ATLANTICO SOLED',
                'regional_id' => 2,
                'hanna' => 1144,
            ),
            101 => 
            array (
                'id' => 102,
                
                'description' => 'LILIPINK CC PLAZA DEL RIO APARTADO',
                'regional_id' => 2,
                'hanna' => 1145,
            ),
            102 => 
            array (
                'id' => 103,
                
                'description' => 'LILIPINK CC SAN SILVESTRE LC 214-21',
                'regional_id' => 1,
                'hanna' => 1147,
            ),
            103 => 
            array (
                'id' => 104,
                
                'description' => 'LILIPINK V/CENCIO CRA 30 VILLAVICEN',
                'regional_id' => 5,
                'hanna' => 1148,
            ),
            104 => 
            array (
                'id' => 105,
                
                'description' => 'LILIPINK CC MULTIPLAZA BOGOTA',
                'regional_id' => 3,
                'hanna' => 1149,
            ),
            105 => 
            array (
                'id' => 106,
                
                'description' => 'LILIPINK CC NUESTRO MONTERIA MONTER',
                'regional_id' => 2,
                'hanna' => 1150,
            ),
            106 => 
            array (
                'id' => 107,
                
                'description' => 'LILIPINK CC CHIPICHAPE CALI',
                'regional_id' => 4,
                'hanna' => 1151,
            ),
            107 => 
            array (
                'id' => 108,
                
                'description' => 'LILIPINK SANTA LIBRADA CRA 14 BOGOT',
                'regional_id' => 5,
                'hanna' => 1152,
            ),
            108 => 
            array (
                'id' => 109,
                
                'description' => 'LILIPINK CC MULTICENTRO IBAGUE',
                'regional_id' => 5,
                'hanna' => 1153,
            ),
            109 => 
            array (
                'id' => 110,
                
                'description' => 'LILIPINK SANTA HELENITA AV CLL 68 B',
                'regional_id' => 3,
                'hanna' => 1154,
            ),
            110 => 
            array (
                'id' => 111,
                
                'description' => 'LILIPINK CC GRAN PLAZA BOSA BOGOTA',
                'regional_id' => 5,
                'hanna' => 1155,
            ),
            111 => 
            array (
                'id' => 112,
                
                'description' => 'LILIPINK CENTRO CLL 16 VALLEDUPAR',
                'regional_id' => 2,
                'hanna' => 1156,
            ),
            112 => 
            array (
                'id' => 113,
                
                'description' => 'LILIPINK CC LLANO GRANDE PALMIRA',
                'regional_id' => 4,
                'hanna' => 1157,
            ),
            113 => 
            array (
                'id' => 114,
                
                'description' => 'LILIPINK CC CASA BLANCA MADRID',
                'regional_id' => 3,
                'hanna' => 1158,
            ),
            114 => 
            array (
                'id' => 115,
                
                'description' => 'LILIPINK CC GUACARI SINCELEJO',
                'regional_id' => 2,
                'hanna' => 1160,
            ),
            115 => 
            array (
                'id' => 116,
                
                'description' => 'LILIPINK CC PLAZA DEL SOL SOLEDAD',
                'regional_id' => 2,
                'hanna' => 1162,
            ),
            116 => 
            array (
                'id' => 117,
                
                'description' => 'LILIPINK CC PORTAL DEL PRADO BAQ',
                'regional_id' => 2,
                'hanna' => 1163,
            ),
            117 => 
            array (
                'id' => 118,
                
                'description' => 'LILIPINK CC UNICO LC 32 PEREIRA',
                'regional_id' => 4,
                'hanna' => 1164,
            ),
            118 => 
            array (
                'id' => 119,
                
                'description' => 'LILIPINK PRADERA CLL 9 BOGOTA',
                'regional_id' => 5,
                'hanna' => 1165,
            ),
            119 => 
            array (
                'id' => 120,
                
                'description' => 'LILIPINK CHICO CLL 93 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1167,
            ),
            120 => 
            array (
                'id' => 121,
                
                'description' => 'LILIPINK CC COSMOCENTRO CALI',
                'regional_id' => 4,
                'hanna' => 1174,
            ),
            121 => 
            array (
                'id' => 122,
                
                'description' => 'LILIPINK CC VIVA ENVIGADO ENVIGADO',
                'regional_id' => 1,
                'hanna' => 1175,
            ),
            122 => 
            array (
                'id' => 123,
                
                'description' => 'LILIPINK CC VIVA TUNJA TUNJA',
                'regional_id' => 3,
                'hanna' => 1176,
            ),
            123 => 
            array (
                'id' => 124,
                
                'description' => 'LILIPINK CC BOCAGRANDE CARTAGENA',
                'regional_id' => 2,
                'hanna' => 1177,
            ),
            124 => 
            array (
                'id' => 125,
                
                'description' => 'LILIPINK CC CARNAVAL SOLEDAD',
                'regional_id' => 2,
                'hanna' => 1178,
            ),
            125 => 
            array (
                'id' => 126,
                
                'description' => 'LILIPINK CC DE MODA OUTLET MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1179,
            ),
            126 => 
            array (
                'id' => 127,
                
                'description' => 'LILIPINK CENTRO CRA10 GIRARDOT',
                'regional_id' => 5,
                'hanna' => 1180,
            ),
            127 => 
            array (
                'id' => 128,
                
                'description' => 'LILIPINK CC GRAN PLAZA ENSUEÑO BOGO',
                'regional_id' => 5,
                'hanna' => 1181,
            ),
            128 => 
            array (
                'id' => 129,
                
                'description' => 'LILIPINK CC PORTAL QUINDIO LC 1-04',
                'regional_id' => 4,
                'hanna' => 1183,
            ),
            129 => 
            array (
                'id' => 130,
                
                'description' => 'LILIPINK CC ALCARAVAN YOPAL',
                'regional_id' => 5,
                'hanna' => 1185,
            ),
            130 => 
            array (
                'id' => 131,
                
                'description' => 'LILIPINK CC PLAZA DE LAS AMERICAS B',
                'regional_id' => 5,
                'hanna' => 1186,
            ),
            131 => 
            array (
                'id' => 132,
                
                'description' => 'LILIPINK CC JARDIN PLAZA CUCUTA',
                'regional_id' => 1,
                'hanna' => 1187,
            ),
            132 => 
            array (
                'id' => 133,
                
                'description' => 'LILIPINK VILLETA CLL 5 VILLETA',
                'regional_id' => 3,
                'hanna' => 1188,
            ),
            133 => 
            array (
                'id' => 134,
                
                'description' => 'LILIPINK CC LA CASTELLANA CARTAGENA',
                'regional_id' => 2,
                'hanna' => 1189,
            ),
            134 => 
            array (
                'id' => 135,
                
                'description' => 'LILIPINK LAS NIEVES CRA 7 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1190,
            ),
            135 => 
            array (
                'id' => 136,
                
                'description' => 'LILIPINK MONTEVIDEO CLL 19 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1192,
            ),
            136 => 
            array (
                'id' => 137,
                
                'description' => 'LILIPINK CC PLAZA CENTRAL LC 208 BO',
                'regional_id' => 5,
                'hanna' => 1193,
            ),
            137 => 
            array (
                'id' => 138,
                
                'description' => 'LILIPINK PLAZA DE NARIÑO PASTO',
                'regional_id' => 4,
                'hanna' => 1194,
            ),
            138 => 
            array (
                'id' => 139,
                
                'description' => 'LILIPINK CC SAN DIEGO MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1195,
            ),
            139 => 
            array (
                'id' => 140,
                
                'description' => 'LILIPINK V/DUPAR VALLEDUPAR',
                'regional_id' => 2,
                'hanna' => 1196,
            ),
            140 => 
            array (
                'id' => 141,
                
                'description' => 'LILIPINK LIA SECTOR EL STEREO V/CEN',
                'regional_id' => 5,
                'hanna' => 1197,
            ),
            141 => 
            array (
                'id' => 142,
                
                'description' => 'LILIPINK OUTLET MONTERIA',
                'regional_id' => 2,
                'hanna' => 1198,
            ),
            142 => 
            array (
                'id' => 143,
                
                'description' => 'LILIPINK CC UNICENTRO DE OCCIDENTE',
                'regional_id' => 3,
                'hanna' => 1199,
            ),
            143 => 
            array (
                'id' => 144,
                
                'description' => 'LILIPINK CC NUESTRO CARTAGO CARTAGO',
                'regional_id' => 4,
                'hanna' => 1200,
            ),
            144 => 
            array (
                'id' => 145,
                
                'description' => 'LILIPINK CC EL EDEN BOGOTA',
                'regional_id' => 5,
                'hanna' => 1201,
            ),
            145 => 
            array (
                'id' => 146,
                
                'description' => 'LILIPINK CC FONTANAR CHIA',
                'regional_id' => 3,
                'hanna' => 1202,
            ),
            146 => 
            array (
                'id' => 147,
                
                'description' => 'LILIPINK CC PUERTA DEL NORTE BELLO',
                'regional_id' => 1,
                'hanna' => 1203,
            ),
            147 => 
            array (
                'id' => 148,
                
                'description' => 'LILIPINK CC ARKADIA MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1204,
            ),
            148 => 
            array (
                'id' => 149,
                
                'description' => 'LILIPINK CC VIVA LAURELES MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1206,
            ),
            149 => 
            array (
                'id' => 150,
                
                'description' => 'LILIPINK CC IDEMA PASTO',
                'regional_id' => 4,
                'hanna' => 1207,
            ),
            150 => 
            array (
                'id' => 151,
                
                'description' => 'LILIPINK CC METROPOLIS BOGOTA',
                'regional_id' => 3,
                'hanna' => 1208,
            ),
            151 => 
            array (
                'id' => 152,
                
                'description' => 'LILIPINK CC UNICENTRO MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1209,
            ),
            152 => 
            array (
                'id' => 153,
                
                'description' => 'LILIPINK CENTRO CLL 37 BARRANQUILLA',
                'regional_id' => 2,
                'hanna' => 1211,
            ),
            153 => 
            array (
                'id' => 154,
                
                'description' => 'LILIPINK CC BULEVAR BOGOTA',
                'regional_id' => 3,
                'hanna' => 1212,
            ),
            154 => 
            array (
                'id' => 155,
                
                'description' => 'LILIPINK CENTRO CRA 6 RIOHACHA',
                'regional_id' => 2,
                'hanna' => 1213,
            ),
            155 => 
            array (
                'id' => 156,
                
                'description' => 'LILIPINK LOS PATIOS AV 10 LOS PATIO',
                'regional_id' => 1,
                'hanna' => 1214,
            ),
            156 => 
            array (
                'id' => 157,
                
                'description' => 'LILIPINK CC GUATAPURI VALLEDUPAR',
                'regional_id' => 2,
                'hanna' => 1215,
            ),
            157 => 
            array (
                'id' => 158,
                
                'description' => 'LILIPINK SAN VICTORINO CRA 10 BOGOT',
                'regional_id' => 3,
                'hanna' => 1218,
            ),
            158 => 
            array (
                'id' => 159,
                
                'description' => 'LILIPINK CC PASEO DEL RIO BOGOTA',
                'regional_id' => 5,
                'hanna' => 1219,
            ),
            159 => 
            array (
                'id' => 160,
                
                'description' => 'LILIPINK CC AV CENTRAL FUSAGASUGA',
                'regional_id' => 5,
                'hanna' => 1220,
            ),
            160 => 
            array (
                'id' => 161,
                
                'description' => 'LILIPINK ESTRELLA EXPRESS IPIALES',
                'regional_id' => 4,
                'hanna' => 1221,
            ),
            161 => 
            array (
                'id' => 162,
                
                'description' => 'LILIPINK ESTRELLA PRINCIPAL IPIALES',
                'regional_id' => 4,
                'hanna' => 1223,
            ),
            162 => 
            array (
                'id' => 163,
                
                'description' => 'LILIPINK LA PLAYA MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1224,
            ),
            163 => 
            array (
                'id' => 164,
                
                'description' => 'LILIPINK 7 DE AGOSTO BOGOTA',
                'regional_id' => 3,
                'hanna' => 1225,
            ),
            164 => 
            array (
                'id' => 165,
                
                'description' => 'LILIPINK CARPA AMERICAS PROM BOGOTA',
                'regional_id' => 3,
                'hanna' => 1226,
            ),
            165 => 
            array (
                'id' => 166,
                
                'description' => 'LILIPINK CENTRO CRA 7 PEREIRA',
                'regional_id' => 4,
                'hanna' => 1227,
            ),
            166 => 
            array (
                'id' => 167,
                
                'description' => 'LILIPINK CC LA PLAZUELA CARTAGENA',
                'regional_id' => 2,
                'hanna' => 1228,
            ),
            167 => 
            array (
                'id' => 168,
                
                'description' => 'LILIPINK CC NUESTRO BOGOTA',
                'regional_id' => 3,
                'hanna' => 1229,
            ),
            168 => 
            array (
                'id' => 169,
                
                'description' => 'LILIPINK LA HERRADURA TULUA',
                'regional_id' => 4,
                'hanna' => 1231,
            ),
            169 => 
            array (
                'id' => 170,
                
                'description' => 'LILIPINK PASO ANCHO CALI',
                'regional_id' => 4,
                'hanna' => 1233,
            ),
            170 => 
            array (
                'id' => 171,
                
                'description' => 'LILIPINK C.C PLAZA FABRICATO BELLO',
                'regional_id' => 1,
                'hanna' => 1234,
            ),
            171 => 
            array (
                'id' => 172,
                
                'description' => 'LILIPINK VALLE DE LILI CC LA 14',
                'regional_id' => 4,
                'hanna' => 1235,
            ),
            172 => 
            array (
                'id' => 173,
                
                'description' => 'LILI PINK CIENAGA MAGDALENA',
                'regional_id' => 2,
                'hanna' => 1236,
            ),
            173 => 
            array (
                'id' => 174,
                
                'description' => 'LILIPINK CENTRO CARRERA 9 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1237,
            ),
            174 => 
            array (
                'id' => 175,
                
                'description' => 'LILI PINK ATALAYA CUCUTA NS',
                'regional_id' => 1,
                'hanna' => 1238,
            ),
            175 => 
            array (
                'id' => 176,
                
                'description' => 'LILI PINK PALACE MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1239,
            ),
            176 => 
            array (
                'id' => 177,
                
                'description' => 'LILIPINK VIVA SINCELEJO',
                'regional_id' => 2,
                'hanna' => 1240,
            ),
            177 => 
            array (
                'id' => 178,
                
                'description' => 'LILIPINK SANTIAGO PLAZA CALI',
                'regional_id' => 4,
                'hanna' => 1242,
            ),
            178 => 
            array (
                'id' => 179,
                
                'description' => 'LILIPINK FERIAS 2 BOGOTA',
                'regional_id' => 3,
                'hanna' => 1243,
            ),
            179 => 
            array (
                'id' => 180,
                
                'description' => 'LILIPINK CASTILLA BOGOTA',
                'regional_id' => 5,
                'hanna' => 1244,
            ),
            180 => 
            array (
                'id' => 181,
                
                'description' => 'LILIPINK SOACHA COMPARTIR',
                'regional_id' => 5,
                'hanna' => 1245,
            ),
            181 => 
            array (
                'id' => 182,
                
                'description' => 'LILIPINK CC SAN RAFAEL BOGOTA',
                'regional_id' => 3,
                'hanna' => 1247,
            ),
            182 => 
            array (
                'id' => 183,
                
                'description' => 'LILIPINK VILLAVICENCIO PORFIA',
                'regional_id' => 5,
                'hanna' => 1248,
            ),
            183 => 
            array (
                'id' => 184,
                
                'description' => 'LILIPINK ANT ITAGUI',
                'regional_id' => 1,
                'hanna' => 1249,
            ),
            184 => 
            array (
                'id' => 185,
                
                'description' => 'LILIPINK CARPA CC UNICO PASTO',
                'regional_id' => 4,
                'hanna' => 1251,
            ),
            185 => 
            array (
                'id' => 186,
                
                'description' => 'LILIPINK VLL CALI LA NAVE',
                'regional_id' => 4,
                'hanna' => 1252,
            ),
            186 => 
            array (
                'id' => 187,
                
                'description' => 'LILI PINK CUN ZIPAQUIRA CC MEGACITY',
                'regional_id' => 3,
                'hanna' => 1253,
            ),
            187 => 
            array (
                'id' => 188,
                
                'description' => 'LILIPINK SANTA MARTA CENTRO LOWCOST',
                'regional_id' => 2,
                'hanna' => 1254,
            ),
            188 => 
            array (
                'id' => 189,
                
                'description' => 'LILIPINK VLL CLI REMANSOS',
                'regional_id' => 4,
                'hanna' => 1255,
            ),
            189 => 
            array (
                'id' => 190,
                
                'description' => 'LILIPINK VLL CLI CEIBAS LOWCOST',
                'regional_id' => 4,
                'hanna' => 1258,
            ),
            190 => 
            array (
                'id' => 191,
                
                'description' => 'LILIPINK CLI LOW COST BOLIVARIANO',
                'regional_id' => 4,
                'hanna' => 1259,
            ),
            191 => 
            array (
                'id' => 192,
                
                'description' => 'LILIPINK PER CC VICTORIA PLAZA',
                'regional_id' => 4,
                'hanna' => 1260,
            ),
            192 => 
            array (
                'id' => 193,
                
                'description' => 'LILIPINK ATQ BELLO CENTRO',
                'regional_id' => 1,
                'hanna' => 1261,
            ),
            193 => 
            array (
                'id' => 194,
                
                'description' => 'LILIPINK BOY TUN CC FLORIDA SHOPPIN',
                'regional_id' => 3,
                'hanna' => 1262,
            ),
            194 => 
            array (
                'id' => 195,
                
                'description' => 'LILIPINK BOG PATIO BONITO',
                'regional_id' => 5,
                'hanna' => 1263,
            ),
            195 => 
            array (
                'id' => 196,
                
                'description' => 'LILIPINK NEIVA CC UNICENTRO',
                'regional_id' => 5,
                'hanna' => 1264,
            ),
            196 => 
            array (
                'id' => 197,
                
                'description' => 'YOI CC GRAN PLAZA ENSUEÑO BOGOTA',
                'regional_id' => 5,
                'hanna' => 3002,
            ),
            197 => 
            array (
                'id' => 198,
                
                'description' => 'YOI CC PLAZA DE LAS AMERICAS BOGOTA',
                'regional_id' => 5,
                'hanna' => 3003,
            ),
            198 => 
            array (
                'id' => 199,
                
                'description' => 'YOI EXITO CHAPINERO BOGOTA',
                'regional_id' => 3,
                'hanna' => 3004,
            ),
            199 => 
            array (
                'id' => 200,
                
                'description' => 'YOI CC PORTAL QUINDIO ARMENIA',
                'regional_id' => 4,
                'hanna' => 3005,
            ),
            200 => 
            array (
                'id' => 201,
                
                'description' => 'YOI CC GRAN PLAZA BOSA BOGOTA',
                'regional_id' => 5,
                'hanna' => 3006,
            ),
            201 => 
            array (
                'id' => 202,
                
                'description' => 'YOI CC GRAN PLAZA SOACHA SOACHA',
                'regional_id' => 5,
                'hanna' => 3007,
            ),
            202 => 
            array (
                'id' => 203,
                
                'description' => 'YOI CC GRAN PLAZA FLORENCIA FLORENC',
                'regional_id' => 5,
                'hanna' => 3008,
            ),
            203 => 
            array (
                'id' => 204,
                
                'description' => 'YOI CC PORTAL 80 BOGOTA',
                'regional_id' => 3,
                'hanna' => 3010,
            ),
            204 => 
            array (
                'id' => 205,
                
                'description' => 'YOI EXITO LA FLORA CALI',
                'regional_id' => 4,
                'hanna' => 3011,
            ),
            205 => 
            array (
                'id' => 206,
                
                'description' => 'YOI CC JARDIN PLAZA CUCUTA',
                'regional_id' => 1,
                'hanna' => 3012,
            ),
            206 => 
            array (
                'id' => 207,
                
                'description' => 'YOI CC PLAZA CENTRAL BOGOTA',
                'regional_id' => 5,
                'hanna' => 3013,
            ),
            207 => 
            array (
                'id' => 208,
                
                'description' => 'YOI EXITO CALLE 80 BOGOTA',
                'regional_id' => 3,
                'hanna' => 3014,
            ),
            208 => 
            array (
                'id' => 209,
                
                'description' => 'YOI EXITO CLL 170 BOGOTA',
                'regional_id' => 3,
                'hanna' => 3016,
            ),
            209 => 
            array (
                'id' => 210,
                
                'description' => 'YOI EXITO SUBA BOGOTA',
                'regional_id' => 3,
                'hanna' => 3017,
            ),
            210 => 
            array (
                'id' => 211,
                
                'description' => 'YOI EXITO COLOMBIA MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3018,
            ),
            211 => 
            array (
                'id' => 212,
                
                'description' => 'YOI EXITO PUERTA DEL NORTE BELLO',
                'regional_id' => 1,
                'hanna' => 3019,
            ),
            212 => 
            array (
                'id' => 213,
                
                'description' => 'YOI EXITO UNICENTRO MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3020,
            ),
            213 => 
            array (
                'id' => 214,
                
                'description' => 'YOI EXITO COLINA BOGOTA',
                'regional_id' => 3,
                'hanna' => 3021,
            ),
            214 => 
            array (
                'id' => 215,
                
                'description' => 'YOI EXITO POBLADO MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3022,
            ),
            215 => 
            array (
                'id' => 216,
                
                'description' => 'YOI CC CARACOLI FLORIDABLANCA',
                'regional_id' => 1,
                'hanna' => 3023,
            ),
            216 => 
            array (
                'id' => 217,
                
                'description' => 'YOI MAYORCA ETAPA 1 SABANETA',
                'regional_id' => 1,
                'hanna' => 3025,
            ),
            217 => 
            array (
                'id' => 218,
                
                'description' => 'YOI EXITO SAN ANTONIO MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3026,
            ),
            218 => 
            array (
                'id' => 219,
                
                'description' => 'YOI EXITO SAN MATEO CUCUTA',
                'regional_id' => 1,
                'hanna' => 3027,
            ),
            219 => 
            array (
                'id' => 220,
                
                'description' => 'YOI EXITO GRAN ESTACION BOGOTA',
                'regional_id' => 3,
                'hanna' => 3029,
            ),
            220 => 
            array (
                'id' => 221,
                
                'description' => 'YOI EXITO NUEVO KENNEDY BOGOTA',
                'regional_id' => 5,
                'hanna' => 3030,
            ),
            221 => 
            array (
                'id' => 222,
                
                'description' => 'YOI EXITO AMERICAS BOGOTA',
                'regional_id' => 5,
                'hanna' => 3031,
            ),
            222 => 
            array (
                'id' => 223,
                
                'description' => 'YOI EXITO VILLA MAYOR BOGOTA',
                'regional_id' => 5,
                'hanna' => 3032,
            ),
            223 => 
            array (
                'id' => 224,
                
                'description' => 'YOI EXITO SALITRE PLAZA BOGOTA',
                'regional_id' => 3,
                'hanna' => 3033,
            ),
            224 => 
            array (
                'id' => 225,
                
                'description' => 'YOI EXITO SAN FERNANDO CALI',
                'regional_id' => 4,
                'hanna' => 3034,
            ),
            225 => 
            array (
                'id' => 226,
                
                'description' => 'YOI EXITO SIMON BOLIVAR CALI',
                'regional_id' => 4,
                'hanna' => 3035,
            ),
            226 => 
            array (
                'id' => 227,
                
                'description' => 'YOI EXITO FLORESTA BOGOTA',
                'regional_id' => 3,
                'hanna' => 3037,
            ),
            227 => 
            array (
                'id' => 228,
                
                'description' => 'YOI EXITO USME BOGOTA',
                'regional_id' => 5,
                'hanna' => 3038,
            ),
            228 => 
            array (
                'id' => 229,
                
                'description' => 'YOI CC LA CUESTA PIEDECUESTA',
                'regional_id' => 1,
                'hanna' => 3039,
            ),
            229 => 
            array (
                'id' => 230,
                
                'description' => 'YOI CC GUACARI SINCELEJO',
                'regional_id' => 2,
                'hanna' => 3040,
            ),
            230 => 
            array (
                'id' => 231,
                
                'description' => 'YOI EXITO SAN PEDRO NEIVA',
                'regional_id' => 5,
                'hanna' => 3041,
            ),
            231 => 
            array (
                'id' => 232,
                
                'description' => 'YOI CC NUESTRO CARTAGO CARTAGO',
                'regional_id' => 4,
                'hanna' => 3042,
            ),
            232 => 
            array (
                'id' => 233,
                
                'description' => 'YOI EXITO LA CASTELLANA CARTAGENA',
                'regional_id' => 2,
                'hanna' => 3043,
            ),
            233 => 
            array (
                'id' => 234,
                
                'description' => 'YOI CC NUESTRO MONTERÍA MONTERIA',
                'regional_id' => 2,
                'hanna' => 3045,
            ),
            234 => 
            array (
                'id' => 235,
                
                'description' => 'YOI CC EL EDEN BOGOTA',
                'regional_id' => 5,
                'hanna' => 3046,
            ),
            235 => 
            array (
                'id' => 236,
                
                'description' => 'YOI EXITO VICTORIA PEREIRA',
                'regional_id' => 4,
                'hanna' => 3047,
            ),
            236 => 
            array (
                'id' => 237,
                
                'description' => 'YOI CC PORTAL DEL PRADO BARRANQUILL',
                'regional_id' => 2,
                'hanna' => 3048,
            ),
            237 => 
            array (
                'id' => 238,
                
                'description' => 'YOI CC GRAN PLAZA SOLEDAD SOLEDAD',
                'regional_id' => 2,
                'hanna' => 3049,
            ),
            238 => 
            array (
                'id' => 239,
                
                'description' => 'YOI CC GRAN PLAZA IPIALES IPIALES',
                'regional_id' => 4,
                'hanna' => 3050,
            ),
            239 => 
            array (
                'id' => 240,
                
                'description' => 'YOI EXITO FUNDADORES MANIZALES',
                'regional_id' => 4,
                'hanna' => 3051,
            ),
            240 => 
            array (
                'id' => 241,
                
                'description' => 'YOI EXITO VIVA WAAJIRA RIOHACHA',
                'regional_id' => 2,
                'hanna' => 3052,
            ),
            241 => 
            array (
                'id' => 242,
                
                'description' => 'YOI EXITO SAN FRANCISCO BARRANQUILL',
                'regional_id' => 2,
                'hanna' => 3053,
            ),
            242 => 
            array (
                'id' => 243,
                
                'description' => 'YOI EXITO BUENAVISTA SANTA MARTA',
                'regional_id' => 2,
                'hanna' => 3054,
            ),
            243 => 
            array (
                'id' => 244,
                
                'description' => 'YOI EXITO ORIENTAL CACIQUE BUCARAMA',
                'regional_id' => 1,
                'hanna' => 3055,
            ),
            244 => 
            array (
                'id' => 245,
                
                'description' => 'YOI EXITO LAS FLORES VALLEDUPAR',
                'regional_id' => 2,
                'hanna' => 3056,
            ),
            245 => 
            array (
                'id' => 246,
                
                'description' => 'YOI EXITO CHIPICHAPE CALI',
                'regional_id' => 4,
                'hanna' => 3057,
            ),
            246 => 
            array (
                'id' => 247,
                
                'description' => 'YOI EXITO VIVA ENVIGADO MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3058,
            ),
            247 => 
            array (
                'id' => 248,
                
                'description' => 'YOI EXITO PANAMERICANA PASTO',
                'regional_id' => 4,
                'hanna' => 3060,
            ),
            248 => 
            array (
                'id' => 249,
                
                'description' => 'YOI CC PASEO DEL RIO BOGOTA',
                'regional_id' => 5,
                'hanna' => 3061,
            ),
            249 => 
            array (
                'id' => 250,
                
                'description' => 'YOI CC CASA BLANCA MADRID',
                'regional_id' => 3,
                'hanna' => 3062,
            ),
            250 => 
            array (
                'id' => 251,
                
                'description' => 'YOI CC MAYALES VALLEDUPAR',
                'regional_id' => 2,
                'hanna' => 3063,
            ),
            251 => 
            array (
                'id' => 252,
                
                'description' => 'YOI CC LA QUINTA BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 3064,
            ),
            252 => 
            array (
                'id' => 253,
                
                'description' => 'YOI EXITO ENVIGADO CENTRO',
                'regional_id' => 1,
                'hanna' => 3065,
            ),
            253 => 
            array (
                'id' => 254,
                
                'description' => 'YOI EXITO BARRANQUILLA CALLE 77',
                'regional_id' => 2,
                'hanna' => 3066,
            ),
            254 => 
            array (
                'id' => 255,
                
                'description' => 'YOI EXITO CARTAGENA MATUNA',
                'regional_id' => 2,
                'hanna' => 3067,
            ),
            255 => 
            array (
                'id' => 256,
                
                'description' => 'YOI EXITO SAN DIEGO CARTAGENA',
                'regional_id' => 2,
                'hanna' => 3068,
            ),
            256 => 
            array (
                'id' => 257,
                
                'description' => 'YOI EXITO BARRANCABERMEJA',
                'regional_id' => 1,
                'hanna' => 3069,
            ),
            257 => 
            array (
                'id' => 258,
                
                'description' => 'YOI NUESTRO BOGOTA',
                'regional_id' => 3,
                'hanna' => 3070,
            ),
            258 => 
            array (
                'id' => 259,
                
                'description' => 'YOI UNICO PASTO',
                'regional_id' => 4,
                'hanna' => 3071,
            ),
            259 => 
            array (
                'id' => 260,
                
                'description' => 'YOI EXITO LA ROSITA BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 3072,
            ),
            260 => 
            array (
                'id' => 261,
                
                'description' => 'YOI EXITO PANAMERICANA POPAYAN',
                'regional_id' => 4,
                'hanna' => 3073,
            ),
            261 => 
            array (
                'id' => 262,
                
                'description' => 'YOI EXITO PLAZA DEL RIO APARTADO',
                'regional_id' => 2,
                'hanna' => 3074,
            ),
            262 => 
            array (
                'id' => 263,
                
                'description' => 'YOI EXITO UNICENTRO ARMENIA',
                'regional_id' => 4,
                'hanna' => 3075,
            ),
            263 => 
            array (
                'id' => 264,
                
                'description' => 'YOI EXITO PARQUE ARBOLEDA PEREIRA',
                'regional_id' => 4,
                'hanna' => 3076,
            ),
            264 => 
            array (
                'id' => 265,
                
                'description' => 'YOI EXITO ALAMEDA DEL SINU MONTERIA',
                'regional_id' => 2,
                'hanna' => 3077,
            ),
            265 => 
            array (
                'id' => 266,
                
                'description' => 'YOI DIVERPLAZA BOGOTA',
                'regional_id' => 3,
                'hanna' => 3078,
            ),
            266 => 
            array (
                'id' => 267,
                
                'description' => 'YOI CARIBE PLAZA CARTAGENA',
                'regional_id' => 2,
                'hanna' => 3079,
            ),
            267 => 
            array (
                'id' => 268,
                
                'description' => 'YOI EXITO SINCELEJO CENTRO',
                'regional_id' => 2,
                'hanna' => 3080,
            ),
            268 => 
            array (
                'id' => 269,
                
                'description' => 'YOI EXITO IBA AV.JORDAN CALLE 80',
                'regional_id' => 5,
                'hanna' => 3082,
            ),
            269 => 
            array (
                'id' => 270,
                
                'description' => 'YOI EXITO LIBERTADOR SANTA MARTA',
                'regional_id' => 2,
                'hanna' => 3083,
            ),
            270 => 
            array (
                'id' => 271,
                
                'description' => 'YOI EXITO TULUA VALLE',
                'regional_id' => 4,
                'hanna' => 3085,
            ),
            271 => 
            array (
                'id' => 272,
                
                'description' => 'YOI EXITO VIVA SINCELEJO',
                'regional_id' => 2,
                'hanna' => 3086,
            ),
            272 => 
            array (
                'id' => 273,
                
                'description' => 'YOI EXITO CAUCASIA',
                'regional_id' => 2,
                'hanna' => 3087,
            ),
            273 => 
            array (
                'id' => 274,
                
                'description' => 'YOI EXITO LA ESTACION IBAGUE',
                'regional_id' => 5,
                'hanna' => 3088,
            ),
            274 => 
            array (
                'id' => 275,
                
                'description' => 'YOI ARRECIFE SANTA MARTA',
                'regional_id' => 2,
                'hanna' => 3089,
            ),
            275 => 
            array (
                'id' => 276,
                
                'description' => 'YOI EXITO BAQ PANORAMA',
                'regional_id' => 2,
                'hanna' => 3090,
            ),
            276 => 
            array (
                'id' => 277,
                
                'description' => 'YOI EXITO CAQUETA FLORENCIA CENTRO',
                'regional_id' => 5,
                'hanna' => 3091,
            ),
            277 => 
            array (
                'id' => 278,
                
                'description' => 'YOI CC PLAZA FABRICATO BELLO',
                'regional_id' => 1,
                'hanna' => 3092,
            ),
            278 => 
            array (
                'id' => 279,
                
                'description' => 'YOI CC PREMIUN PLAZA MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3093,
            ),
            279 => 
            array (
                'id' => 280,
                
                'description' => 'YOI EXITO VALLEDUPAR CENTRO',
                'regional_id' => 2,
                'hanna' => 3094,
            ),
            280 => 
            array (
                'id' => 281,
                
                'description' => 'YOI EXITO GIRARDOT CUNDINAMARCA',
                'regional_id' => 5,
                'hanna' => 3095,
            ),
            281 => 
            array (
                'id' => 282,
                
                'description' => 'YOI EXITO UNICENTRO CALI',
                'regional_id' => 4,
                'hanna' => 3097,
            ),
            282 => 
            array (
                'id' => 283,
                
                'description' => 'YOI UNICENTRO PEREIRA',
                'regional_id' => 4,
                'hanna' => 3098,
            ),
            283 => 
            array (
                'id' => 284,
                
                'description' => 'YOI LLANOGRANDE PALMIRA VALLE',
                'regional_id' => 4,
                'hanna' => 3099,
            ),
            284 => 
            array (
                'id' => 285,
                
                'description' => 'YOI BOG CHAPINERO',
                'regional_id' => 3,
                'hanna' => 3100,
            ),
            285 => 
            array (
                'id' => 286,
                
                'description' => 'YOI EXITO EJECUTIVOS CTG',
                'regional_id' => 2,
                'hanna' => 3102,
            ),
            286 => 
            array (
                'id' => 287,
                
                'description' => 'YOI EXITO SANDIEGO MED',
                'regional_id' => 1,
                'hanna' => 3103,
            ),
            287 => 
            array (
                'id' => 288,
                
                'description' => 'YOI EXITO PASTO NARIÑO',
                'regional_id' => 4,
                'hanna' => 3104,
            ),
            288 => 
            array (
                'id' => 289,
                
                'description' => 'YOI EXITO SABANA VILLAVICENCIO',
                'regional_id' => 5,
                'hanna' => 3105,
            ),
            289 => 
            array (
                'id' => 290,
                
                'description' => 'YOI GALAN BOGOTA',
                'regional_id' => 5,
                'hanna' => 3106,
            ),
            290 => 
            array (
                'id' => 291,
                
                'description' => 'YOI EXITO OCCIDENTE BOGOTA',
                'regional_id' => 3,
                'hanna' => 3107,
            ),
            291 => 
            array (
                'id' => 292,
                
                'description' => 'YOI CC UNICO BARRANQUILLA',
                'regional_id' => 2,
                'hanna' => 3108,
            ),
            292 => 
            array (
                'id' => 293,
                
                'description' => 'YOI AEROPUERTO CAMILO DAZA CUC',
                'regional_id' => 1,
                'hanna' => 3109,
            ),
            293 => 
            array (
                'id' => 294,
                
                'description' => 'YOI AEROPUERTO PALONEGRO BUC',
                'regional_id' => 1,
                'hanna' => 3110,
            ),
            294 => 
            array (
                'id' => 295,
                
                'description' => 'YOI EXITO LA FELICIDAD BOG',
                'regional_id' => 3,
                'hanna' => 3111,
            ),
            295 => 
            array (
                'id' => 296,
                
                'description' => 'YOI EXITO FONTIBON BOG',
                'regional_id' => 3,
                'hanna' => 3112,
            ),
            296 => 
            array (
                'id' => 297,
                
                'description' => 'YOI EXITO LAS NIEVES',
                'regional_id' => 3,
                'hanna' => 3114,
            ),
            297 => 
            array (
                'id' => 298,
                
                'description' => 'YOI VIVA BARRANQUILLA',
                'regional_id' => 2,
                'hanna' => 3115,
            ),
            298 => 
            array (
                'id' => 299,
                
                'description' => 'YOI EXITO LAURELES MEDELLIN',
                'regional_id' => 1,
                'hanna' => 3116,
            ),
            299 => 
            array (
                'id' => 300,
                
                'description' => 'YOI NUESTRO ATLANTICO BRQ',
                'regional_id' => 2,
                'hanna' => 3117,
            ),
            300 => 
            array (
                'id' => 301,
                
                'description' => 'YOI BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 3118,
            ),
            301 => 
            array (
                'id' => 302,
                
                'description' => 'YOI EXITO SANCANCIO',
                'regional_id' => 4,
                'hanna' => 3119,
            ),
            302 => 
            array (
                'id' => 303,
                
                'description' => 'YOI CC MALLPLAZA CARTEGENA',
                'regional_id' => 2,
                'hanna' => 3120,
            ),
            303 => 
            array (
                'id' => 304,
                
                'description' => 'YOI EXITO CARTAGENA',
                'regional_id' => 2,
                'hanna' => 3121,
            ),
            304 => 
            array (
                'id' => 305,
                
                'description' => 'YOI AEROPUERTO SIMON BOLIVAR SMR',
                'regional_id' => 2,
                'hanna' => 3122,
            ),
            305 => 
            array (
                'id' => 306,
                
                'description' => 'YOI AEROPUERTO ALFONSO LOPEZ VIL',
                'regional_id' => 2,
                'hanna' => 3123,
            ),
            306 => 
            array (
                'id' => 307,
                
                'description' => 'YOI EXITO ROBLEDO',
                'regional_id' => 1,
                'hanna' => 3124,
            ),
            307 => 
            array (
                'id' => 308,
                
                'description' => 'YOI RIS DOSQUEBRADAS CC PROGRESO',
                'regional_id' => 4,
                'hanna' => 3125,
            ),
            308 => 
            array (
                'id' => 309,
                
                'description' => 'YOI EXITO ANT SABANETA',
                'regional_id' => 1,
                'hanna' => 3126,
            ),
            309 => 
            array (
                'id' => 310,
                
                'description' => 'YOI BOY DUITAMA',
                'regional_id' => 3,
                'hanna' => 3127,
            ),
            310 => 
            array (
                'id' => 311,
                
                'description' => 'YOI BOG CENTRO COMERCIAL TUNAL',
                'regional_id' => 5,
                'hanna' => 3128,
            ),
            311 => 
            array (
                'id' => 312,
                
                'description' => 'YOI EXITO ANT MEDELLIN MOLINOS',
                'regional_id' => 1,
                'hanna' => 3130,
            ),
            312 => 
            array (
                'id' => 313,
                
                'description' => 'YOI EXITO VLL TULUA EL RETIRO',
                'regional_id' => 4,
                'hanna' => 3131,
            ),
            313 => 
            array (
                'id' => 314,
                
                'description' => 'YOI EXITO CABECERA BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 3133,
            ),
            314 => 
            array (
                'id' => 315,
                
                'description' => 'YOI ANT MED CC DE MODA OUTLET',
                'regional_id' => 1,
                'hanna' => 3134,
            ),
            315 => 
            array (
                'id' => 316,
                
                'description' => 'YOI ÉXITO MAG SMR CENTRO',
                'regional_id' => 2,
                'hanna' => 3135,
            ),
            316 => 
            array (
                'id' => 317,
                
                'description' => 'YOI EXITO CUBA PEREIRA',
                'regional_id' => 4,
                'hanna' => 3136,
            ),
            317 => 
            array (
                'id' => 318,
                
                'description' => 'YOI EXITO ANT MED BELEN',
                'regional_id' => 1,
                'hanna' => 3138,
            ),
            318 => 
            array (
                'id' => 319,
                
                'description' => 'YOI EXITO BOG 20 DE JULIO',
                'regional_id' => 5,
                'hanna' => 3139,
            ),
            319 => 
            array (
                'id' => 320,
                
                'description' => 'YOI EXITO VLL CLI PALMETTO',
                'regional_id' => 4,
                'hanna' => 3140,
            ),
            320 => 
            array (
                'id' => 321,
                
                'description' => 'YOI EXITO BOG PLAZA DE BOLIVAR',
                'regional_id' => 3,
                'hanna' => 3141,
            ),
            321 => 
            array (
                'id' => 322,
                
                'description' => 'YOI EXITO ANT BELLO CENTRO',
                'regional_id' => 1,
                'hanna' => 3142,
            ),
            322 => 
            array (
                'id' => 323,
                
                'description' => 'YOI EXITO VALLE DE LILI CALI',
                'regional_id' => 4,
                'hanna' => 3143,
            ),
            323 => 
            array (
                'id' => 324,
                
                'description' => 'YOI ATL SOLEDAD CARNAVAL',
                'regional_id' => 2,
                'hanna' => 3144,
            ),
            324 => 
            array (
                'id' => 325,
                
                'description' => 'YOI NDS CUCUTA CC UNICENTRO',
                'regional_id' => 1,
                'hanna' => 3145,
            ),
            325 => 
            array (
                'id' => 326,
                
                'description' => 'YOI CUN FUSAGASUGA',
                'regional_id' => 5,
                'hanna' => 3146,
            ),
            326 => 
            array (
                'id' => 327,
                
                'description' => 'YOI ANT MED CC LA CENTRAL',
                'regional_id' => 1,
                'hanna' => 3147,
            ),
            327 => 
            array (
                'id' => 328,
                
                'description' => 'YOI VALLE GUADALAJARA DE BUGA',
                'regional_id' => 4,
                'hanna' => 3148,
            ),
            328 => 
            array (
                'id' => 329,
                
                'description' => 'L&Y YAHAD CC MALLPLAZA',
                'regional_id' => 3,
                'hanna' => 5001,
            ),
            329 => 
            array (
                'id' => 330,
                
                'description' => 'LILI EN YOI YAHAD SAN ANDRES ISLA',
                'regional_id' => 2,
                'hanna' => 5501,
            ),
            330 => 
            array (
                'id' => 331,
                
                'description' => 'LILI EN YOI YAHAD TOBERIN BOGOTA',
                'regional_id' => 3,
                'hanna' => 5503,
            ),
            331 => 
            array (
                'id' => 332,
                
                'description' => 'LILI EN YOI YAHAD ITAGUI',
                'regional_id' => 1,
                'hanna' => 5504,
            ),
            332 => 
            array (
                'id' => 333,
                
                'description' => 'LILI EN YOI YAHAD IPIALES CRA 6',
                'regional_id' => 4,
                'hanna' => 5505,
            ),
            333 => 
            array (
                'id' => 334,
                
                'description' => 'LILI&YOI YAHAD MADRID',
                'regional_id' => 3,
                'hanna' => 5506,
            ),
            334 => 
            array (
                'id' => 335,
                
                'description' => 'LILI&YOI YAHAD BUCARAMANGA',
                'regional_id' => 1,
                'hanna' => 5507,
            ),
            335 => 
            array (
                'id' => 336,
                
                'description' => 'LILI&YOI YAHAD YOPAL',
                'regional_id' => 5,
                'hanna' => 5508,
            ),
            336 => 
            array (
                'id' => 337,
                
                'description' => 'LILI&YOI YAHAD MEGAMERICAS',
                'regional_id' => 5,
                'hanna' => 5509,
            ),
            337 => 
            array (
                'id' => 338,
                
                'description' => 'LILI&YOI YAHAD MAYORCA OUTLET',
                'regional_id' => 1,
                'hanna' => 5510,
            ),
            338 => 
            array (
                'id' => 339,
                
                'description' => 'LILI&YOI YAHAD ZIPAQUIRA',
                'regional_id' => 3,
                'hanna' => 5511,
            ),
            339 => 
            array (
                'id' => 340,
                
                'description' => 'LILI&YOI YAHAD VENTURA SOACHA',
                'regional_id' => 5,
                'hanna' => 5512,
            ),
            340 => 
            array (
                'id' => 341,
                
                'description' => 'LILI&YOI YAHAD ALEGRA BARRANQUILLA',
                'regional_id' => 2,
                'hanna' => 5513,
            ),
            341 => 
            array (
                'id' => 342,
                
                'description' => 'LILI&YOI YAHAD FLORESTA BOGOTA',
                'regional_id' => 3,
                'hanna' => 5514,
            ),
            342 => 
            array (
                'id' => 343,
                
                'description' => 'LILI&YOI YAHAD CC NOVACENTRO PASTO',
                'regional_id' => 4,
                'hanna' => 5516,
            ),
            343 => 
            array (
                'id' => 344,
                
                'description' => 'LILI&YOI YAHAAD EXITO NIZA',
                'regional_id' => 3,
                'hanna' => 5517,
            ),
            344 => 
            array (
                'id' => 345,
                
                'description' => 'LILI&YOI YAHAAD OUTLET AV 68',
                'regional_id' => 3,
                'hanna' => 5518,
            ),
            345 => 
            array (
                'id' => 346,
                
                'description' => 'LILI&YOI YAHAAD FONTIBON',
                'regional_id' => 3,
                'hanna' => 5519,
            ),
            346 => 
            array (
                'id' => 347,
                
                'description' => 'LILI&YOI YAHAAD BUCARAMANGA CLL36',
                'regional_id' => 1,
                'hanna' => 5520,
            ),
            347 => 
            array (
                'id' => 348,
                
                'description' => 'LILI&YOI YAHAAD NDS CUC CLL 12',
                'regional_id' => 1,
                'hanna' => 5521,
            ),
            348 => 
            array (
                'id' => 349,
                
                'description' => 'LILI&YOI YAHAD CDB MON CLL33',
                'regional_id' => 2,
                'hanna' => 5522,
            ),
            349 => 
            array (
                'id' => 350,
                
                'description' => 'LILI&YOI YAHAAD BOG CIUDAD MONTES',
                'regional_id' => 5,
                'hanna' => 5523,
            ),
            350 => 
            array (
                'id' => 351,
                
                'description' => 'LILI&YOI YAHAAD ATL BRQ CC PASEO',
                'regional_id' => 2,
                'hanna' => 5524,
            ),
            351 => 
            array (
                'id' => 352,
                
                'description' => 'LILI&YOI YAHAD BOG RESTREPO CLL16',
                'regional_id' => 5,
                'hanna' => 5525,
            ),
            352 => 
            array (
                'id' => 353,
                
                'description' => 'LILI&YOI YAHAD ANT MED CLL33',
                'regional_id' => 1,
                'hanna' => 5526,
            ),
            353 => 
            array (
                'id' => 354,
                
                'description' => 'LILI&YOI YAHAD CAU PPN CC CAMPANARI',
                'regional_id' => 4,
                'hanna' => 5527,
            ),
            354 => 
            array (
                'id' => 355,
                
                'description' => 'LILI&YOI YAHAD CAL MZL CC MALLPLAZA',
                'regional_id' => 4,
                'hanna' => 5528,
            ),
            355 => 
            array (
                'id' => 356,
                
                'description' => 'LILI&YOI YAHAD EXITO BOG MODELIA',
                'regional_id' => 3,
                'hanna' => 5529,
            ),
            356 => 
            array (
                'id' => 357,
                
                'description' => 'YAHAD UNICO CALI',
                'regional_id' => 4,
                'hanna' => 5531,
            ),
            357 => 
            array (
                'id' => 358,
                
                'description' => 'LILI&YOI YAHAD BOG CC CONNECTA',
                'regional_id' => 3,
                'hanna' => 5532,
            ),
            358 => 
            array (
                'id' => 359,
                
                'description' => 'LILI&YOI YAHAD CALI CENTRO',
                'regional_id' => 4,
                'hanna' => 5533,
            ),
            359 => 
            array (
                'id' => 360,
                
                'description' => 'LILI&YOI YAHAD BMG CRA 14 CENTRO',
                'regional_id' => 1,
                'hanna' => 5534,
            ),
            360 => 
            array (
                'id' => 361,
                
                'description' => 'LILI&YOI YAHAD CTG CC EL BOSQUE',
                'regional_id' => 2,
                'hanna' => 5536,
            ),
            361 => 
            array (
                'id' => 362,
                
                'description' => 'LILI&YOI YAHAD BOG VENECIA',
                'regional_id' => 5,
                'hanna' => 5537,
            ),
            362 => 
            array (
                'id' => 363,
                
                'description' => 'LILI&YOI YAHAD CUN FUNZA CENTRO',
                'regional_id' => 3,
                'hanna' => 5538,
            ),
            363 => 
            array (
                'id' => 364,
                
                'description' => 'LILI&YOI YAHAD CUN FSG CENTRO',
                'regional_id' => 5,
                'hanna' => 5539,
            ),
            364 => 
            array (
                'id' => 365,
                
                'description' => 'LILI&YOI YAHAD VLL CLI LA LUNA',
                'regional_id' => 4,
                'hanna' => 5540,
            ),
            365 => 
            array (
                'id' => 366,
                
                'description' => 'LILI&YOI YAHAD BOY SOGAMOSO CLL 11',
                'regional_id' => 3,
                'hanna' => 5541,
            ),
            366 => 
            array (
                'id' => 367,
                
                'description' => 'LILI&YOI YAHAD BOG EVACUADOR AUTOSU',
                'regional_id' => 5,
                'hanna' => 5542,
            ),
            367 => 
            array (
                'id' => 368,
                
                'description' => 'LILI&YOI YAHAD CUN CC CENTRO CHIA',
                'regional_id' => 3,
                'hanna' => 5543,
            ),
            368 => 
            array (
                'id' => 369,
                
                'description' => 'L&Y YAHAD ANT PARQUE ITAGUI OUTLET',
                'regional_id' => 1,
                'hanna' => 5544,
            ),
            369 => 
            array (
                'id' => 370,
                
                'description' => 'YAHAD VLL CLI MANUELA BELTRAN',
                'regional_id' => 4,
                'hanna' => 5545,
            ),
            370 => 
            array (
                'id' => 371,
                
                'description' => 'YAHAD HUI NEIVA CC OASIS',
                'regional_id' => 5,
                'hanna' => 5546,
            ),
            371 => 
            array (
                'id' => 372,
                
                'description' => 'YAHAD MANIZALES CENTRO OUTLET',
                'regional_id' => 4,
                'hanna' => 5547,
            ),
            372 => 
            array (
                'id' => 373,
                
                'description' => 'YAHAD IPIALES CENTRO CRA 5',
                'regional_id' => 4,
                'hanna' => 5548,
            ),
            373 => 
            array (
                'id' => 374,
                
                'description' => 'YAHAD CUC GUAIMARAL OUTLET',
                'regional_id' => 1,
                'hanna' => 5549,
            ),
            374 => 
            array (
                'id' => 375,
                
                'description' => 'YAHAD VLL CLI CALLE 9',
                'regional_id' => 4,
                'hanna' => 5551,
            ),
            375 => 
            array (
                'id' => 376,
                
                'description' => 'YAHAD CARPA SCH CC UNISUR',
                'regional_id' => 5,
                'hanna' => 5552,
            ),
            376 => 
            array (
                'id' => 377,
                
                'description' => 'LILI&YOI YAHAD MDE CC AVENTURA',
                'regional_id' => 1,
                'hanna' => 5553,
            ),
            377 => 
            array (
                'id' => 378,
                
                'description' => 'LILI&YOI YAHAD BOG ALAMOS IND',
                'regional_id' => 3,
                'hanna' => 5555,
            ),
            378 => 
            array (
                'id' => 379,
                
                'description' => 'YOI EXITO COUNTRY BOGOTA',
                'regional_id' => 3,
                'hanna' => 3059,
            ),
            379 => 
            array (
                'id' => 380,
                
                'description' => 'LILIPINK CC LA CENTRAL MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1168,
            ),
            380 => 
            array (
                'id' => 381,
                
                'description' => 'LILIPINK CC VILLA COUNTRY BARRANQUI',
                'regional_id' => 2,
                'hanna' => 1084,
            ),
            381 => 
            array (
                'id' => 382,
                
                'description' => 'LILIPINK PRADO CLL 72 BARRANQUILLA',
                'regional_id' => 2,
                'hanna' => 1043,
            ),
            382 => 
            array (
                'id' => 383,
                
                'description' => 'LILIPINK CC HEROES BOGOTA',
                'regional_id' => 3,
                'hanna' => 1022,
            ),
            383 => 
            array (
                'id' => 384,
                
                'description' => 'LILIPINK CC UNICO LC 107 BARRANQUIL',
                'regional_id' => 2,
                'hanna' => 1010,
            ),
            384 => 
            array (
                'id' => 385,
                
                'description' => 'LILIPINK CC PREMIUM PLAZA MEDELLIN',
                'regional_id' => 1,
                'hanna' => 1004,
            ),
            385 => 
            array (
                'id' => 386,
                
                'description' => 'LILIPINK CC MILENIO BOGOTA',
                'regional_id' => 5,
                'hanna' => 1002,
            ),
            386 => 
            array (
                'id' => 387,
                
                'description' => 'LILIPINK CC PLAZA IMPERIAL BOGOTA',
                'regional_id' => 3,
                'hanna' => 1001,
            ),
        ));
        
        
    }
}