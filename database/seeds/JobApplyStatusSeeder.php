<?php

use Illuminate\Database\Seeder;

class JobApplyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_apply_status')->insert([
       		['name'=>'Applied'],
       		['name'=>'Accepted'],
       		['name'=>'Declined']
       	]);
    }
}
