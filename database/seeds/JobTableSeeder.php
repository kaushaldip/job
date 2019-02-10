<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jobs')->insert([
       'user_id'=>1,
       'category_id'=>9,
       'position'=>'Manager',
       'title'=>'Anaesthesiology',
       'type'=>1,
       'address_1'=>'1431 N North Park Avenue',
       'address_2'=>'',
       'city'=>'Chicago',
       'zip'=>'60610',
       'state_id'=>'14',
       'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don',
       'roles'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
       <li>Curabitur interdum nisl quis placerat ornare.</li>
       <li>Curabitur ornare enim ac aliquam efficitur.</li>
       <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
       <li>Proin egestas dui et pulvinar pellentesque.</li>
       <li>In ultricies nulla eget lacus tempor lobortis.</li>',
       'skills'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
       <li>Curabitur interdum nisl quis placerat ornare.</li>
       <li>Curabitur ornare enim ac aliquam efficitur.</li>
       <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
       <li>Proin egestas dui et pulvinar pellentesque.</li>
       <li>In ultricies nulla eget lacus tempor lobortis.</li>',
       'status_id'=>2,
       'expires_at' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
       'start_at' => Carbon::now()->format('Y-m-d H:i:s'),
       'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
      DB::table('jobs')->insert([
        'user_id'=>1,
        'category_id'=>1,
        'position'=>'Manager',
        'title'=>'Solution Design Manager',
        'type'=>1,
        'address_1'=>'1437 N Wells St',
        'address_2'=>'',
        'city'=>'Chicago',
        'zip'=>'60610',
        'state_id'=>'14',
        'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don',
        'roles'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'skills'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'status_id'=>2,
        'expires_at' => Carbon::now()->addDays(3)->format('Y-m-d H:i:s'),
        'start_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      DB::table('jobs')->insert([
        'user_id'=>1,
        'category_id'=>1,
        'position'=>'EM',
        'title'=>'EM - Physician',
        'type'=>1,
        'address_1'=>'1341 N Sedgwick St',
        'address_2'=>'',
        'city'=>'Chicago',
        'zip'=>'60610',
        'state_id'=>'14',
        'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don',
        'roles'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'skills'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'status_id'=>2,
        'expires_at' => Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
        'start_at' => Carbon::now()->addDays(-10)->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->addDays(-10)->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      DB::table('jobs')->insert([
        'user_id'=>1,
        'category_id'=>1,
        'position'=>'General',
        'title'=>'Ortho Physician',
        'type'=>1,
        'address_1'=>'1344 N Wells St',
        'address_2'=>'test address2',
        'city'=>'Chicago',
        'zip'=>'60610',
        'state_id'=>'14',
        'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don',
        'roles'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'skills'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'status_id'=>2,
        'expires_at' => Carbon::now()->addDays(12)->format('Y-m-d H:i:s'),
        'start_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->addDays(-3)->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      DB::table('jobs')->insert([
        'user_id'=>1,
        'category_id'=>1,
        'position'=>'Oncologist',
        'title'=>'Oncologist needed in Kansas',
        'type'=>1,
        'address_1'=>'230 W Division St',
        'address_2'=>'',
        'city'=>'New York',
        'zip'=>'60610',
        'state_id'=>'14',
        'description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which done.',
        'roles'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'skills'=>'<li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
        <li>Curabitur interdum nisl quis placerat ornare.</li>
        <li>Curabitur ornare enim ac aliquam efficitur.</li>
        <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
        <li>Proin egestas dui et pulvinar pellentesque.</li>
        <li>In ultricies nulla eget lacus tempor lobortis.</li>',
        'status_id'=>2,
        'expires_at' => Carbon::now()->addDays(12)->format('Y-m-d H:i:s'),
        'start_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
        'created_at' => Carbon::now()->addDays(-2)->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      DB::table('applies')->insert([
        'user_id'=>2,
        'job_id'=>1,
        'job_apply_status_id'=>1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
  }
