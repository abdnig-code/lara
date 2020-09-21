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
        $this->call(MainBlocksSeeder::class);

        $this->call(PagesSeeder::class);

        $this->call(CitiesSeeder::class);

        $this->call(DepartmentsSeeder::class);

        $this->call(EmployeesSeeder::class);
    }
}
