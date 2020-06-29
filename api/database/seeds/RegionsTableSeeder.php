<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('regions')->delete();

        DB::table('regions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'numeration' => 15,
                'name' => 'Arica y Parinacota',
                'abbreviation' => 'AP',
                'capital' => 'Arica',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'numeration' => 1,
                'name' => 'Tarapacá',
                'abbreviation' => 'TA',
                'capital' => 'Iquique',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'numeration' => 2,
                'name' => 'Antofagasta',
                'abbreviation' => 'AN',
                'capital' => 'Antofagasta',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'numeration' => 3,
                'name' => 'Atacama',
                'abbreviation' => 'AT',
                'capital' => 'Copiapó',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'numeration' => 4,
                'name' => 'Coquimbo',
                'abbreviation' => 'CO',
                'capital' => 'La Serena',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'numeration' => 5,
                'name' => 'Valparaiso',
                'abbreviation' => 'VA',
                'capital' => 'valparaíso',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 7,
                'numeration' => 13,
                'name' => 'Metropolitana de Santiago',
                'abbreviation' => 'RM',
                'capital' => 'Santiago',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 8,
                'numeration' => 6,
                'name' => 'Libertador General Bernardo O\'Higgins',
                'abbreviation' => 'OH',
                'capital' => 'Rancagua',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 9,
                'numeration' => 7,
                'name' => 'Maule',
                'abbreviation' => 'MA',
                'capital' => 'Talca',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 10,
                'numeration' => 16,
                'name' => 'Ñuble',
                'abbreviation' => 'NB',
                'capital' => 'Chillán',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 11,
                'numeration' => 8,
                'name' => 'Biobío',
                'abbreviation' => 'BI',
                'capital' => 'Concepción',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 12,
                'numeration' => 9,
                'name' => 'La Araucanía',
                'abbreviation' => 'IAR',
                'capital' => 'Temuco',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 =>
            array (
                'id' => 13,
                'numeration' => 14,
                'name' => 'Los Ríos',
                'abbreviation' => 'LR',
                'capital' => 'Valdivia',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 =>
            array (
                'id' => 14,
                'numeration' => 10,
                'name' => 'Los Lagos',
                'abbreviation' => 'LL',
                'capital' => 'Puerto Montt',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 =>
            array (
                'id' => 15,
                'numeration' => 11,
                'name' => 'Aysén del General Carlos Ibáñez del Campo',
                'abbreviation' => 'AI',
                'capital' => 'Coyhaique',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 =>
            array (
                'id' => 16,
                'numeration' => 12,
                'name' => 'Magallanes y de la Antártica Chilena',
                'abbreviation' => 'MG',
                'capital' => 'Punta Arenas',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
