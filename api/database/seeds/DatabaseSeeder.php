<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Type_usersTableSeeder::class,
            Type_institutionsTableSeeder::class,
            Type_evaluationsTableSeeder::class,

            RegionsTableSeeder::class,
            ProvincesTableSeeder::class,
            CommunesTableSeeder::class,

            InstitutionsTableSeeder::class,
            UsersTableSeeder::class
        ]);
        $this->call(AcademicLevelsTableSeeder::class);
        $this->call(AsignaturesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(AcademicLevelCourseTableSeeder::class);
        $this->call(MattersTableSeeder::class);
        $this->call(AsignatureMatterTableSeeder::class);
    }
}
