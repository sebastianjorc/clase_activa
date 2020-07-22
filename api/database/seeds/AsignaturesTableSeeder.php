<?php

use Illuminate\Database\Seeder;

class AsignaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asignatures')->delete();
        
        \DB::table('asignatures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'LENGUAJE Y COMUNICACIÓN',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'LENGUA Y LITERATURA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'MATEMÁTICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'INGLÉS',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'HISTORIA, GEOGRAFÍA Y CIENCIAS SOCIALES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'CIENCIAS NATURALES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ARTES VISUALES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'MÚSICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'ARTES MUSICALES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'TECNOLOGÍA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'EDUCACIÓN TECNOLÓGICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'EDUCACIÓN FÍSICA Y SALUD',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ORIENTACIÓN',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'LENGUA INDÍGENA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'FILOSOFÍA Y SICOLOGÍA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'FÍSICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'QUÍMICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BIOLOGÍA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'RELIGIÓN',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'MATEMÁTICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'CIENCIAS NATURALES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'HISTORIA, GEOGRAFÍA Y CIENCIAS SOCIALES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            22 => 
            array (
                'id' => 27,
                'name' => 'asignature DE PRUEBA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            23 => 
            array (
                'id' => 28,
                'name' => 'GENERAL',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            24 => 
            array (
                'id' => 29,
                'name' => 'TEÑIDO',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            25 => 
            array (
                'id' => 30,
                'name' => 'TALLADO',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            26 => 
            array (
                'id' => 31,
                'name' => 'FUNDAMENTOS DE HIDRÁULICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            27 => 
            array (
                'id' => 32,
                'name' => 'ESMALTADO',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            28 => 
            array (
                'id' => 33,
                'name' => 'SIMCE CUARTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            29 => 
            array (
                'id' => 34,
                'name' => 'CHAMILO',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            30 => 
            array (
                'id' => 35,
                'name' => 'CURSO OPERADOR',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            31 => 
            array (
                'id' => 36,
                'name' => 'MATEMÁTICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            32 => 
            array (
                'id' => 37,
                'name' => 'LIDERAZGO',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            33 => 
            array (
                'id' => 38,
                'name' => 'INVESTIGACIÓN DE OPERACIONES',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
            34 => 
            array (
                'id' => 39,
                'name' => 'ECONOMÍA',
                'state' => 1,
                'created_at' => '2020-07-09 09:11:31',
                'updated_at' => '2020-07-09 09:11:31',
            ),
        ));
        
        
    }
}