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
        //factory(App\User::class, 20)->create();
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'username' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            'type_user_id' =>(1),
            'institution_id' =>(1)
        ]);
    }
}
