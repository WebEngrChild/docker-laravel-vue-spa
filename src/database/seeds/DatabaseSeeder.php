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
        $this->call(TasksTableSeeder::class);
        $this->call(BackgroundsTableSeeder::class);
        $this->call(CareersTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(PrimarySkilsTableSeeder::class);
        $this->call(SecondarySkilsTableSeeder::class);
    }
}
