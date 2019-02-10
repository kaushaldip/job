<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(JobStatusSeeder::class);
         $this->call(JobApplyStatusSeeder::class);
         $this->call(AdminTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EmployeeTableSeed::class);
        $this->call(SizeTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(JobTableSeeder::class);
    }
}
