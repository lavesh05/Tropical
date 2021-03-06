<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');
        $this->call(EmployeeTableSeeder::class);
        $this->command->info('Employee table seeded!');
    }
}
