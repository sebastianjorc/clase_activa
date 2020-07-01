<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('Roles')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'Admin master',
                'guard_name' => 'web',
                'description' => 'Administrador del grupo clase activa',
                'slug' => 'admin_master',
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 =>
            array (
                'id' => '2',
                'name' => 'Admin institucion',
                'guard_name' => 'web',
                'description' => 'Administrador de una institución cliente',
                'slug' => 'admin_institution',
                'created_at' => now(),
                'updated_at' => now()
            ),
            2 =>
            array (
                'id' => '3',
                'name' => 'Alumno',
                'guard_name' => 'web',
                'description' => 'Estudiante en clase activa',
                'slug' => 'alumno',
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 =>
            array (
                'id' => '4',
                'name' => 'Profesor',
                'guard_name' => 'web',
                'description' => 'Profesor en clase activa',
                'slug' => 'profesor',
                'created_at' => now(),
                'updated_at' => now()
            ),
            4 =>
            array (
                'id' => '5',
                'name' => 'Apoderado',
                'guard_name' => 'web',
                'description' => 'Apoderado de un estudiante de clase activa',
                'slug' => 'Apoderado',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ));
    }

}
