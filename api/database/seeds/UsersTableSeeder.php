<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'AdminMaster',
                'email' => 'admin_master@example.com',
                'username' => 'admin_master@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 =>
            array (
                'id' => '2',
                'name' => 'AdminInstitution',
                'email' => 'admin_institution@example.com',
                'username' => 'admin_institution@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            2 =>
            array (
                'id' => '3',
                'name' => 'Student',
                'email' => 'student@example.com',
                'username' => 'student@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 =>
            array (
                'id' => '4',
                'name' => 'Professor',
                'email' => 'professor@example.com',
                'username' => 'professor@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ),
            4 =>
            array (
                'id' => '5',
                'name' => 'Attorney',
                'email' => 'attorney@example.com',
                'username' => 'attorney@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ),
        ));
    }
}
