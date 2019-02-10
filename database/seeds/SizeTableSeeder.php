<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_sizes')->insert(['name'=>'10 - 100','created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('employee_sizes')->insert(['name'=>'100 - 500','created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('employee_sizes')->insert(['name'=>'500 - 1000','created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('employee_sizes')->insert(['name'=>'1000 - 1500','created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('employee_sizes')->insert(['name'=>'1500 - 2000','created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('employee_sizes')->insert(['name'=>'2000+','created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
