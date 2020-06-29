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
        DB::table('Type_users')->insert([
            'id' => '1',
            'name_category' => 'Admin master',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => '2',
            'name_category' => 'Admin institucion',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => '3',
            'name_category' => 'Alumno',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => '4',
            'name_category' => 'Profesor',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => '5',
            'name_category' => 'Apoderado',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
