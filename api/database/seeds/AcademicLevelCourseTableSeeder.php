<?php

use Illuminate\Database\Seeder;

class AcademicLevelCourseTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('academic_level_course')->delete();
        
        \DB::table('academic_level_course')->insert(array (
            0 => 
            array (
                'id' => 101,
                'academic_level_id' => 1,
                'course_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 134,
                'academic_level_id' => 1,
                'course_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 166,
                'academic_level_id' => 1,
                'course_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 167,
                'academic_level_id' => 1,
                'course_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 168,
                'academic_level_id' => 1,
                'course_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 169,
                'academic_level_id' => 1,
                'course_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 170,
                'academic_level_id' => 1,
                'course_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 171,
                'academic_level_id' => 1,
                'course_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 172,
                'academic_level_id' => 2,
                'course_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 173,
                'academic_level_id' => 2,
                'course_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 174,
                'academic_level_id' => 2,
                'course_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 175,
                'academic_level_id' => 2,
                'course_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 184,
                'academic_level_id' => 4,
                'course_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 185,
                'academic_level_id' => 4,
                'course_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 186,
                'academic_level_id' => 4,
                'course_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 187,
                'academic_level_id' => 4,
                'course_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 192,
                'academic_level_id' => 1,
                'course_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 193,
                'academic_level_id' => 10,
                'course_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 194,
                'academic_level_id' => 10,
                'course_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 195,
                'academic_level_id' => 11,
                'course_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 196,
                'academic_level_id' => 12,
                'course_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 197,
                'academic_level_id' => 12,
                'course_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 198,
                'academic_level_id' => 13,
                'course_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 199,
                'academic_level_id' => 14,
                'course_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 200,
                'academic_level_id' => 14,
                'course_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 201,
                'academic_level_id' => 14,
                'course_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 202,
                'academic_level_id' => 18,
                'course_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 203,
                'academic_level_id' => 18,
                'course_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 204,
                'academic_level_id' => 18,
                'course_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}