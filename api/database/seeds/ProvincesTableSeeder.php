<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('provinces')->delete();

        DB::table('provinces')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Arica',
                'region_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Parinacota',
                'region_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Iquique',
                'region_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'El Tamarugal',
                'region_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Tocopilla',
                'region_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'El Loa',
                'region_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Antofagasta',
                'region_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Chañaral',
                'region_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Copiapó',
                'region_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Huasco',
                'region_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Elqui',
                'region_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Limarí',
                'region_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Choapa',
                'region_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Petorca',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Los Andes',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'San Felipe de Aconcagua',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Quillota',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Valparaiso',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'San Antonio',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Isla de Pascua',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Marga Marga',
                'region_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Chacabuco',
                'region_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Santiago',
                'region_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Cordillera',
                'region_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Maipo',
                'region_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Melipilla',
                'region_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Talagante',
                'region_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Cachapoal',
                'region_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Colchagua',
                'region_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Cardenal Caro',
                'region_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Curicó',
                'region_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Talca',
                'region_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Linares',
                'region_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Cauquenes',
                'region_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Diguillín',
                'region_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Itata',
                'region_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Punilla',
                'region_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Bio Bío',
                'region_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Concepción',
                'region_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Arauco',
                'region_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'Malleco',
                'region_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Cautín',
                'region_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Valdivia',
                'region_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'Ranco',
                'region_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'Osorno',
                'region_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'Llanquihue',
                'region_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'Chiloé',
                'region_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'Palena',
                'region_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'Coyhaique',
                'region_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'Aysén',
                'region_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'General Carrera',
                'region_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'Capitán Prat',
                'region_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'Última Esperanza',
                'region_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'Magallanes',
                'region_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'Tierra del Fuego',
                'region_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'Antártica Chilena',
                'region_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
