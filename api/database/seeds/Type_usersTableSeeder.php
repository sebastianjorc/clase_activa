<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Type_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Type_users')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name_category' => 'Admin master',
                'slug' => 'admin_master',
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 =>
            array (
                'id' => '2',
                    'name_category' => 'Admin institucion',
                    'slug' => 'admin_institution',
                    'created_at' => now(),
                    'updated_at' => now()
            ),
            2 =>
            array (
                'id' => '3',
                'name_category' => 'Alumno',
                'slug' => 'alumno',
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 =>
            array (
                'id' => '4',
                'name_category' => 'Profesor',
                'slug' => 'profesor',
                'created_at' => now(),
                'updated_at' => now()),
            4 =>
            array (
                'id' => '5',
                'name_category' => 'Apoderado',
                'slug' => 'Apoderado',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ));
    }
}
