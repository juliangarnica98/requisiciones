<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            ['name' => 'Administrador',
            'last_name' => 'Admin',
            'email'=>'admin@fastmoda.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Admin');

        User::create(
            ['name' => ' JERSON OCTAVIO',
            'last_name' => 'RINCON ALDANA',
            'area'=> 3,
            'email'=>'jersonjo5ra@hotmail.com', 
            'password' => Hash::make('1019136775')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' FREDY ALEXANDER',
            'last_name' => 'TORRES CASTILLO',
            'area'=> 4,
            'email'=>'fredytorrescastillo1982@outlook.com', 
            'password' => Hash::make('74754552')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' MARIA ODILIAR',
            'last_name' => 'JIMENEZ RICAURTE',
            'area'=> 3,
            'email'=>'ma.odi.jimz89@gmail.com', 
            'password' => Hash::make('1106363042')]
        )->assignRole('Boss');





        User::create(
            ['name' => ' LEIDY JOHANA',
            'last_name' => 'RIOS DURAN',
            'area'=> 4,
            'email'=>'leyla490@outlook.com', 
            'password' => Hash::make('1022931820')]
        )->assignRole('Boss');

        User::create(
            ['name' => '  KATY LILI',
            'last_name' => 'CHAPARRO VEGA',
            'area'=> 3,
            'email'=>'criminologokaty@gmail.com', 
            'password' => Hash::make('1126427906')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' LUIS EDUARDO',
            'last_name' => 'GRISALES MAYORGA',
            'area'=> 4,
            'email'=>'lucho771212@hotmail.com', 
            'password' => Hash::make('79760022')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'RODRIGO ANDRES',
            'last_name' => 'PARDO OCTAVIO',
            'area'=> 3,
            'email'=>'1069717266ro@gmail.com', 
            'password' => Hash::make('1069717266')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'CRISTIAN ANTONIO',
            'last_name' => 'CARRILLO LOPEZ ',
            'area'=> 4,
            'email'=>'C_afi17@hotmail.com', 
            'password' => Hash::make('1012383529')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'SENAIDA',
            'last_name' => 'GONZALEZ NIETO',
            'area'=> 4,
            'email'=>'senaidagonzalez26@gmail.com', 
            'password' => Hash::make('1026587422')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'IVAN DARIO',
            'last_name' => 'MORENO RIAÑO',
            'area'=> 3,
            'email'=>'ivanmorenosa7@gmail.com', 
            'password' => Hash::make('1233902198')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'RONAL STEVEN',
            'last_name' => 'CAMACHO ROMERO',
            'area'=> 3,
            'email'=>'ronalcamacho.7@gmail.com', 
            'password' => Hash::make('1193221169')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' LUIS ALEJANDRO',
            'last_name' => 'ROMERO CEPEDA',
            'area'=> 3,
            'email'=>'luis.cepedasee@gmail.com', 
            'password' => Hash::make('1032470231')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' PAULA CAROLINA',
            'last_name' => 'GALINDO PRIETO ',
            'area'=> 3,
            'email'=>'galindopaulacarolina@gmail.com', 
            'password' => Hash::make('1014303103')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JUAN CARLOS ',
            'last_name' => 'MONTENEGRO ',
            'area'=> 3,
            'email'=>'juan.montenegro@fastmoda.com.co', 
            'password' => Hash::make('79908163')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'NATALY ALBA ',
            'last_name' => 'MATALLANA',
            'area'=> 3,
            'email'=>'nataly.alba@fastmoda.com.co', 
            'password' => Hash::make('1014188092')]
        )->assignRole('Boss');

        User::create(
            ['name' => ' Indira ',
            'last_name' => 'Rivera Ortiz',
            'area'=> 4,
            'email'=>'indira.rivera@fastmoda.com.co', 
            'password' => Hash::make('52482473')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'Yesid ',
            'last_name' => 'Rojas Carreño',
            'area'=> 3,
            'email'=>'yesid.rojas@fastmoda.com.co', 
            'password' => Hash::make('79651980')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'LIDA CESILIA',
            'last_name' => 'ORTEGA ARAQUE',
            'area'=> 1,
            'regional'=>'REGIONAL ANTIOQUIA Y SANTANDERES',
            'email'=>'lyda.ortega@fastmoda.com.co', 
            'password' => Hash::make('43739211')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'YAMID ALBERTO',
            'last_name' => 'LOTERO RODAS',
            'area'=> 1,
            'regional'=>'REGIONAL ANTIOQUIA Y SANTANDERES',
            'email'=>'yamid.lotero@fastmoda.com.co', 
            'password' => Hash::make('1039421006')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'XIOMARA',
            'last_name' => 'FLOREZ GIRALDO',
            'area'=> 1,
            'regional'=>'REGIONAL ANTIOQUIA Y SANTANDERES',
            'email'=>'xiomara.florez@fastmoda.com.co', 
            'password' => Hash::make('1234990760')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JHON JAIRO',
            'last_name' => 'MARTINEZ ROMAN',
            'area'=> 1,
            'regional'=>'REGIONAL ANTIOQUIA Y SANTANDERES',
            'email'=>'jhon.martinez@fastmoda.com.co', 
            'password' => Hash::make('88213920')]
        )->assignRole('Boss');

           User::create(
            ['name' => 'JANETH',
            'last_name' => 'CASTILLO GUALDRON',
            'area'=> 1,
            'regional'=>'REGIONAL ANTIOQUIA Y SANTANDERES',
            'email'=>'janeth.castillo@fastmoda.com.co', 
            'password' => Hash::make('63527474')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'LILIANA',
            'last_name' => 'CABRERA',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO SUR',
            'email'=>'liliana.cabrera@fastmoda.com.co', 
            'password' => Hash::make('36184743')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JOHANA',
            'last_name' => 'GUTIERREZ ',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO SUR',
            'email'=>'myriam.gutierrez@fastmoda.com.co', 
            'password' => Hash::make('40189856')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'PABLO EMILIO',
            'last_name' => 'ROJAS ',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO SUR',
            'email'=>'pablo.espinosa@fastmoda.com.co', 
            'password' => Hash::make('1030562319')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'DANIEL',
            'last_name' => 'PULIDO ',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO SUR',
            'email'=>'daniel.pulido@fastmoda.com.co', 
            'password' => Hash::make('86083809')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'ALEXANDRA',
            'last_name' => 'BAENA TORNE ',
            'area'=> 1,
            'regional'=>'REGIONAL COSTA',
            'email'=>'alexandra.baena@fastmoda.com.co', 
            'password' => Hash::make('22504317')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JORGE ADALBERTO',
            'last_name' => 'RUA HERAZO',
            'area'=> 1,
            'regional'=>'REGIONAL COSTA',
            'email'=>'jorge.rua@fastmoda.com.co', 
            'password' => Hash::make('8799411')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'SAMIRNA DEL CARMEN',
            'last_name' => 'NUÑEZ TAPIA',
            'area'=> 1,
            'regional'=>'REGIONAL COSTA',
            'email'=>'samirnadelcarmen.nunez@fastmoda.com.co', 
            'password' => Hash::make('45755876')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'YARIBEL PATRICIA',
            'last_name' => 'REDONDO PEREZ',
            'area'=> 1,
            'regional'=>'REGIONAL COSTA',
            'email'=>'yaribel.redondo@fastmoda.com.co', 
            'password' => Hash::make('32845638')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'CARLOS ARTURO',
            'last_name' => 'HERNANDEZ LLORENTE ',
            'area'=> 1,
            'regional'=>'REGIONAL COSTA',
            'email'=>'carlos.hernandez@fastmoda.com.co', 
            'password' => Hash::make('78752890')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'ANDRES FELIPE',
            'last_name' => 'PRIETO',
            'area'=> 1,
            'regional'=>'REGIONAL SUR',
            'email'=>'andres.prieto@fastmoda.com.co', 
            'password' => Hash::make('14466406')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'ANDRES FELIPE',
            'last_name' => 'OSORIO',
            'area'=> 1,
            'regional'=>'REGIONAL SUR',
            'email'=>'andres.osorio@fastmoda.com.co', 
            'password' => Hash::make('9867226')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'ANDRES FELIPE ',
            'last_name' => 'DIOSA LOPEZ',
            'area'=> 1,
            'regional'=>'REGIONAL SUR',
            'email'=>'andres.diosa@fastmoda.com.co', 
            'password' => Hash::make('1097395583')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'ANGIE TATIANA',
            'last_name' => 'MERA RIVERA',
            'area'=> 1,
            'regional'=>'REGIONAL SUR',
            'email'=>'angie.mera@fastmoda.com.co', 
            'password' => Hash::make('1094951401')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'Fabian Dario',
            'last_name' => 'Duran Parra',
            'area'=> 1,
            'regional'=>'REGIONAL SUR',
            'email'=>'fabian.duran@fastmoda.com.co', 
            'password' => Hash::make('9737468')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'CLAUDIA LORENA',
            'last_name' => 'HERNANDEZ OSORIO',
            'area'=> 1,
            'regional'=>'REGIONAL SUR',
            'email'=>'claudia.hernandez@fastmoda.com.co', 
            'password' => Hash::make('31323891')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'TANIA CAMILA',
            'last_name' => 'DUEÑAS NOVOA',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO NORTE',
            'email'=>'tania.duenas@fastmoda.com.co', 
            'password' => Hash::make('1019128639')]
        )->assignRole('Boss');

         User::create(
            ['name' => 'GUILLERMO ANTONIO',
            'last_name' => 'ROSAS ABRIL',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO NORTE',
            'email'=>'guillermo.rosas@fastmoda.com.co', 
            'password' => Hash::make('88256887')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'DIANA KATHERINE',
            'last_name' => 'PERDOMO CASTRO',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO NORTE',
            'email'=>'diana.perdomo@fastmoda.com.co', 
            'password' => Hash::make('1032387285')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'ANGELA CONSTANZA',
            'last_name' => 'SOLER GONZALEZ ',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO NORTE',
            'email'=>'angela.soler@fastmoda.com.co', 
            'password' => Hash::make('53141027')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'LUIS CARLOS',
            'last_name' => 'FUENTES TARAZONA',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO NORTE',
            'email'=>'luis.fuentes@fastmoda.com.co', 
            'password' => Hash::make('1095799655')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'FLOR IMELDA',
            'last_name' => 'CASTELLANOS CABIELES',
            'area'=> 1,
            'regional'=>'REGIONAL CENTRO NORTE',
            'email'=>'flor.castellanos@fastmoda.com.co', 
            'password' => Hash::make('39790208')]
        )->assignRole('Boss');


        User::create(
            ['name' => 'LILIAN CAROLINA',
            'last_name' => 'ROMERO GARCIA',
            'area'=> 5,
   
            'email'=>'carolina.romero@fastmoda.com.co', 
            'password' => Hash::make('52203418')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'ADRIANA CATALINA',
            'last_name' => 'RAMIREZ VARGAS',
            'area'=> 5,
 
            'email'=>'adriana.ramirez@fastmoda.com.co', 
            'password' => Hash::make('52429330')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'DIANA DELGADO',
            'last_name' => 'ALARCON',
            'area'=> 5,

            'email'=>'diana.delgado@fastmoda.com.co', 
            'password' => Hash::make('39566089')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'DIANA MARCELA',
            'last_name' => 'VERGARA LOPEZ',
            'area'=> 5,

            'email'=>'diana.vergara@fastmoda.com.co', 
            'password' => Hash::make('43400381')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JHON JAIRO',
            'last_name' => 'VALENCIA GOMEZ',
            'area'=> 5,

            'email'=>'jhon.valencia@fastmoda.com.co', 
            'password' => Hash::make('70562642')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'ELIZABETH ',
            'last_name' => 'SALAS ORDOÑEZ',
            'area'=> 5,

            'email'=>'elizabeth.salas@fastmoda.com.co', 
            'password' => Hash::make('67003899')]
        )->assignRole('Boss');

        // User::create(
        //     ['name' => 'MARLLY',
        //     'last_name' => 'VALDERRAMA GARRIDO',
        //     'area'=> 5,
  
        //     'email'=>'marlly.valderrama@fastmoda.com.co', 
        //     'password' => Hash::make('66903498')]
        // )->assignRole('Boss');


        
        User::create(
            ['name' => 'OLGA LUCIA',
            'last_name' => 'CAICEDO GUTIERREZ',
            'area'=> 5,

            'email'=>'olga.caicedo@fastmoda.com.co', 
            'password' => Hash::make('22468183')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'OSIRIS ELENA',
            'last_name' => 'CAMPO DIAZ',
            'area'=> 5,

            'email'=>'osiris.campo@fastmoda.com.co', 
            'password' => Hash::make('64557215')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'JUANA SOFIA',
            'last_name' => 'LINERO CUETTO',
            'area'=> 5,

            'email'=>'juana.linero@fastmoda.com.co', 
            'password' => Hash::make('57462450')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'SUE MILENA',
            'last_name' => 'AGRESOTT REVUELTA',
            'area'=> 5,

            'email'=>'sue.agresott@fastmoda.com.co', 
            'password' => Hash::make('1047380674')]
        )->assignRole('Boss');
        
        User::create(
            ['name' => 'LEONOR',
            'last_name' => 'MARIN SUAREZ',
            'area'=> 5,

            'email'=>'leonor.marin@fastmoda.com.co', 
            'password' => Hash::make('63310334')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'LILIANA',
            'last_name' => 'PAEZ RODRIGUEZ',
            'area'=> 5,
 
            'email'=>'liliana.paez@fastmoda.com.co', 
            'password' => Hash::make('1090407032')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'MARLLY',
            'last_name' => 'VALDERRAMA GARRIDO',
            'area'=> 5,
   
            'email'=>'marlly.valderrama@fastmoda.com.co', 
            'password' => Hash::make('66903498')]
        )->assignRole('Boss');

        User::create(
            ['name' => 'LEIDY JOHANNA',
            'last_name' => 'SALAZAR SALAZAR',
            'area'=> 5,
  
            'email'=>'leidy.salazar@fastmoda.com.co', 
            'password' => Hash::make('1088010238')]
        )->assignRole('Boss');
        
        User::create(
            ['name' => 'LUZ ALBA',
            'last_name' => 'CARO',
            'area'=> 5,
     
            'email'=>'luz.caro@fastmoda.com.co', 
            'password' => Hash::make('1079012016')]
        )->assignRole('Boss');

        // User::create(
        //     ['name' => 'ADRIANA CATALINA',
        //     'last_name' => 'RAMIREZ VARGAS',
        //     'area'=> 5,

        //     'email'=>'adriana.ramirez@fastmoda.com.co', 
        //     'password' => Hash::make('52429330')]
        // )->assignRole('Boss');

        // User::create(
        //     ['name' => 'LILIAN CAROLINA',
        //     'last_name' => 'ROMERO GARCIA',
        //     'area'=> 5,
 
        //     'email'=>'carolina.romero@fastmoda.com.co', 
        //     'password' => Hash::make('52203418')]
        // )->assignRole('Boss');


        

        User::create(
            ['name' => 'Sofia',
            'last_name' => 'Gonzalez',
            'email'=>'sofia.gonzalez@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Specialist');

        User::create(
            ['name' => 'TICED',
            'last_name' => 'ARDILA',
            'email'=>'generalista.admin@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist');

        User::create(
            ['name' => 'Matias',
            'last_name' => 'Villalobos',
            'email'=>'generalista.cedis@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist');


        User::create(
            ['name' => 'Lina',
            'last_name' => 'Pataquiva',
            'email'=>'reclutador2@alianzatalentohumano.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Recruiter');

        User::create(
            ['name' => 'Gina',
            'last_name' => 'Garcia ',
            'email'=>'reclutador1@alianzatalentohumano.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Recruiter');
        
        User::create(
            ['name' => 'Reclutador',
            'last_name' => 'Sur',
            'email'=>'reclutador.sur@alianzatalentohumano.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Recruiter');

        User::create(
            ['name' => 'Reclutador',
            'last_name' => 'Norte',
            'email'=>'reclutador.norte@alianzatalentohumano.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Recruiter');

        User::create(
            ['name' => 'Reclutador',
            'last_name' => 'Centro',
            'email'=>'reclutador.centro@alianzatalentohumano.com', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Recruiter');

        User::create(
            ['name' => 'Generalista',
            'last_name' => 'Cali',
            'email'=>'generalistacali@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist_comercial');

        User::create(
            ['name' => 'Generalista',
            'last_name' => 'Medellin',
            'email'=>'generalistamedellin@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist_comercial');

        User::create(
            ['name' => 'Generalista',
            'last_name' => 'Costa',
            'email'=>'generalista.costa@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist_comercial');

        User::create(
            ['name' => 'Generalista',
            'last_name' => 'centrosur',
            'email'=>'generalista.centrosur@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist_comercial');

        User::create(
            ['name' => 'Generalista',
            'last_name' => 'centronorte',
            'email'=>'generalista.centronorte@fastmoda.com.co', 
            'password' => Hash::make('lilipink')]
        )->assignRole('Generalist_comercial');
        

     
      // Jefes de administra
        
      User::create(
        ['name' => 'WILLIAM ALBERTO',
        'last_name' => ' HERNANDEZ PARAMO',
        'area'=> 2,
 
        'email'=>'alberto.hernandez@fastmoda.com.co', 
        'password' => Hash::make('14250750')]
    )->assignRole('Boss');


    User::create(
        ['name' => 'OSCAR ANDRES',
        'last_name' => 'PARDO VARON',
        'area'=> 2,
 
        'email'=>'oscar.pardo@fastmoda.com.co', 
        'password' => Hash::make('16537044')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'MARTHA YOLANDA',
        'last_name' => ' RUBIANO GARZON',
        'area'=> 2,
 
        'email'=>'martha.rubiano@fastmoda.com.co', 
        'password' => Hash::make('39724062')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'BLANCA NUBIA',
        'last_name' => ' FONSECA CORREDOR',
        'area'=> 2,
 
        'email'=>'nubia.fonseca@fastmoda.com.co', 
        'password' => Hash::make('52131464')]
    )->assignRole('Boss');


    User::create(
        ['name' => 'ETNA YADIRA',
        'last_name' => ' FANDIÑO CHITIVA',
        'area'=> 2,
 
        'email'=>'yadira.fandino@fastmoda.com.co', 
        'password' => Hash::make('52374625')]
    )->assignRole('Boss');

    // User::create(
    //     ['name' => 'BLANCA INDIRA',
    //     'last_name' => 'RIVERA ORTIZ',
    //     'area'=> 2,
 
    //     'email'=>'indira.rivera@fastmoda.com.co', 
    //     'password' => Hash::make('52482473')]
    // )->assignRole('Boss');


    User::create(
        ['name' => 'JENNY MYLED',
        'last_name' => 'NIETO CABRERA',
        'area'=> 2,
 
        'email'=>'miled.nieto@fastmoda.com.co', 
        'password' => Hash::make('52794522')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'ANGIE SAIDY',
        'last_name' => 'CALDERÓN FARFAN',
        'area'=> 2,
 
        'email'=>'angie.calderon@fastmoda.com.co', 
        'password' => Hash::make('52959458')]
    )->assignRole('Boss');


    User::create(
        ['name' => 'DIEGO ARMANDO',
        'last_name' => 'GARCIA GUACANEME',
        'area'=> 2,
 
        'email'=>'diego.garcia@fastmoda.com.co', 
        'password' => Hash::make('79223544')]
    )->assignRole('Boss');


    User::create(
        ['name' => 'FREDY ANDRES',
        'last_name' => 'CALVACHI MESA',
        'area'=> 2,
 
        'email'=>'fredy.calvachi@fastmoda.com.co', 
        'password' => Hash::make('79642147')]
    )->assignRole('Boss');

    // User::create(
    //     ['name' => 'JUAN CARLOS',
    //     'last_name' => 'MONTENEGRO RINCON',
    //     'area'=> 2,
 
    //     'email'=>'juan.montenegro@fastmoda.com.co', 
    //     'password' => Hash::make('79908163')]
    // )->assignRole('Boss');


    User::create(
        ['name' => 'ALEXANDER',
        'last_name' => 'RAMIREZ INSUASTY',
        'area'=> 2,
 
        'email'=>'alexander.ramirez@fastmoda.com.co', 
        'password' => Hash::make('1010166855')]
    )->assignRole('Boss');


    User::create(
        ['name' => 'NATALY ALEJANDRA',
        'last_name' => 'CORREDOR FORERO',
        'area'=> 2,
 
        'email'=>'nataly.corredor@fastmoda.com.co', 
        'password' => Hash::make('1010206589')]
    )->assignRole('Boss');

    // User::create(
    //     ['name' => 'YESID ROJAS',
    //     'last_name' => ' CARREÑO',
    //     'area'=> 2,
 
    //     'email'=>'yesid.rojas@fastmoda.com.co', 
    //     'password' => Hash::make('79651980')]
    // )->assignRole('Boss');


    // User::create(
    //     ['name' => 'NATALY ALBA',
    //     'last_name' => '  MATALLANA',
    //     'area'=> 2,
 
    //     'email'=>'nataly.alba@fastmoda.com.co', 
    //     'password' => Hash::make('1014188092')]
    // )->assignRole('Boss');

    User::create(
        ['name' => 'ANDREA JULIETTE',
        'last_name' => 'ROMERO GARCIA',
        'area'=> 2,
 
        'email'=>'andrea.romero@fastmoda.com.co', 
        'password' => Hash::make('1014204543')]
    )->assignRole('Boss');


    User::create(
        ['name' => 'MARIA CAMILA',
        'last_name' => ' PEÑA PARRA',
        'area'=> 2,
 
        'email'=>'maria.pena@fastmoda.com.co', 
        'password' => Hash::make('1014285647')]
    )->assignRole('Boss');

    // User::create(
    //     ['name' => 'NATHALY ANDREA',
    //     'last_name' => ' BUSTOS VANEGAS',
    //     'area'=> 2,
 
    //     'email'=>'', 
    //     'password' => Hash::make('1015408157')]
    // )->assignRole('Boss');


    User::create(
        ['name' => 'KAREN MARCELA',
        'last_name' => 'LOPEZ AGUIRRE',
        'area'=> 2,
 
        'email'=>'marcela.lopez@fastmoda.com.co', 
        'password' => Hash::make('1016069829')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'EDWIN',
        'last_name' => 'CASTRO QUINTERO',
        'area'=> 2,
 
        'email'=>'edwin.castro@fastmoda.com.co', 
        'password' => Hash::make('1018493791')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'ANA CAROLINA',
        'last_name' => 'HERNANDEZ IRIARTE',
        'area'=> 2,
 
        'email'=>'ana.hernandez@fastmoda.com.co', 
        'password' => Hash::make('1019089797')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'MARIA FERNANDA',
        'last_name' => 'PEREZ RESTREPO',
        'area'=> 2,
 
        'email'=>'maria.perez@fundacion-suenosdelili.com', 
        'password' => Hash::make('1020728803')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'TATIANA',
        'last_name' => 'BLANCO CHAVARRO',
        'area'=> 2,
 
        'email'=>'tatiana.blanco@fastmoda.com.co', 
        'password' => Hash::make('1020729210')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'SANDRA MILENA',
        'last_name' => 'SIERRA TRUJILLO',
        'area'=> 2,
 
        'email'=>'sandra.sierra@fastmoda.com.co', 
        'password' => Hash::make('1020769102')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'KARINA',
        'last_name' => 'ARIAS VARGAS',
        'area'=> 2,
 
        'email'=>'karina.arias@fastmoda.com.co', 
        'password' => Hash::make('1020792235')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'CRISTIAN DAVID',
        'last_name' => 'VAZQUEZ',
        'area'=> 2,
 
        'email'=>'cristian.vasquez@fastmoda.com.co', 
        'password' => Hash::make('1022398027')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'KEVIN JOVANI ',
        'last_name' => 'CASTILLO',
        'area'=> 2,
 
        'email'=>'kevin.castillo@fastmoda.com.co', 
        'password' => Hash::make('1023954973')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'LUISA FERNANDA',
        'last_name' => 'ARIAS',
        'area'=> 2,
 
        'email'=>'luisa.arias@fastmoda.com.co', 
        'password' => Hash::make('1024489868')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'VERONICA ALEJANDRA',
        'last_name' => ' VASQUEZ CARDOZO',
        'area'=> 2,
 
        'email'=>'veronica.vasquez@fastmoda.com.co', 
        'password' => Hash::make('1024515676')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'CRISTHIAN CAMILO',
        'last_name' => ' GARCIA GAMEZ',
        'area'=> 2,
 
        'email'=>'cristian.garcia@fastmoda.com.co', 
        'password' => Hash::make('1026268270')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'ANDRES FELIPE',
        'last_name' => ' RIAÑO PARRA',
        'area'=> 2,
 
        'email'=>'felipe.riano@fastmoda.com.co', 
        'password' => Hash::make('1026582005')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'LUIS FERNANDO',
        'last_name' => '  GOMEZ MENDOZA',
        'area'=> 2,
 
        'email'=>'luis.gomez@fastmoda.com.co', 
        'password' => Hash::make('1032417212')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'LAIDY JOHANA',
        'last_name' => '  LONDOÑO CARDONA',
        'area'=> 2,
 
        'email'=>'johana.londono@fastmoda.com.co', 
        'password' => Hash::make('1053780636')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'NEIDY ALEXANDRA',
        'last_name' => ' PORTILLA BAYONA',
        'area'=> 2,
 
        'email'=>'neidy.portilla@fastmoda.com.co', 
        'password' => Hash::make('1073505609')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'SERGIO ALONSO',
        'last_name' => ' VASQUEZ OCHOA',
        'area'=> 2,
 
        'email'=>'sergio.vasquez@fastmoda.com.co', 
        'password' => Hash::make('1128448172')]
    )->assignRole('Boss');

    User::create(
        ['name' => 'LAURA CAMILA',
        'last_name' => ' MORENO LEON',
        'area'=> 2,
 
        'email'=>'laura.moreno@fastmoda.com.co', 
        'password' => Hash::make('1233507398')]
    )->assignRole('Boss');



    }
}

