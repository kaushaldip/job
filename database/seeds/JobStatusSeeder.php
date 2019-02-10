<?php

use Illuminate\Database\Seeder;

class JobStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_status')->insert([
       		['name'=>'pending'],
       		['name'=>'draft'],
       		['name'=>'activated'],
       		['name'=>'canceled'],
       	]);
    }
}
