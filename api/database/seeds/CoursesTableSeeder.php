<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PRIMERO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SEGUNDO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TERCERO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CUARTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'QUINTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'SEXTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'SÉPTIMO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'OCTAVO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'PRIMERO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'SEGUNDO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'TERCERO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'CUARTO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'PRIMERO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'SEGUNDO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'TERCERO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'CUARTO MEDIO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'SEGUNDO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'CUARTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'SEXTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'OCTAVO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            20 => 
            array (
                'id' => 23,
                'name' => 'courses DE PRUEBA',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            21 => 
            array (
                'id' => 24,
                'name' => 'OLEOHIDRÁULICA BÁSICA',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'PELUQUERIA',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'ARTESANÍA MADERA',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'MAQUINARIA PESADA',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'MANICURE',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'SIMCE CUARTO BÁSICO',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'PERFORACIONES',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'ECAP',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            29 => 
            array (
                'id' => 32,
                'name' => 'PICHUCAP',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'ESPECIALIDAD I',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => 'ESPECIALIDAD II',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
            32 => 
            array (
                'id' => 35,
                'name' => 'ESPECIALIDAD III',
                'state' => 1,
                'created_at' => '2020-07-09 09:13:48',
                'updated_at' => '2020-07-09 09:13:48',
            ),
        ));
        
        
    }
}