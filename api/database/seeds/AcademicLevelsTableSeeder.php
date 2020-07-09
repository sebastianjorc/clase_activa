<?php

use Illuminate\Database\Seeder;

class AcademicLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('academic_levels')->delete();
        
        \DB::table('academic_levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'EDUCACIÓN BÁSICA',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'EDUCACIÓN MEDIA',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'EDUCACION SUPERIOR',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'PSU',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'OTRO',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'CURSOS FORMATIVOS',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'TALLERES',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'OTEC',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'SIMCE',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'OTIC',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'PECAP',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'COMOELCOPITEC',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'DOCTORADO',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'MAGISTER',
                'state' => 1,
                'created_at' => '2020-07-08 15:55:27',
                'updated_at' => '2020-07-08 15:55:27',
            ),
        ));
        
        
    }
}