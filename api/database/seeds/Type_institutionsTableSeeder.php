<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Type_institutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Type_institutions')->insert([
            'id' => '1',
            'name_category' => 'Main',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => '2',
            'name_category' => 'Colegio',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => '3',
            'name_category' => 'OTEC',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //
    }
}
