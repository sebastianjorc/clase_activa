<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Institutions')->insert([
            'id' => '1',
            'rut' => '0',
            'name' => 'clase activa',
            'business_name' => 'web',
            'direction' => 'web',
            'phone' => '0',
            'created_at' => now(),
            'updated_at' => now(),
            'type_institution_id' =>(1),
            'commune_id' =>(1)
        ]);
    }
}
