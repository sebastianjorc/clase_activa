<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => '0',
                'name' => 'List matter',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'matter.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => '1',
                'name' => 'List asignature',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'asignature.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => '2',
                'name' => 'List curse',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'curse.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => '3',
                'name' => 'List academic level',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'academic_level.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => '4',
                'name' => 'List evaluation',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'evaluation.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => '5',
                'name' => 'List institution',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'institution.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => '6',
                'name' => 'List user',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'user.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => '7',
                'name' => 'List product',
                'description' => 'A user can create a permission',
                'guard_name' => 'api',
                'slug' => 'attorney.index',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
    }
}
