<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital_id = DB::table('users')->insertGetId([
            'name' => 'Athenahealth, Inc',
            'email' => 'athenahealth@gmail.com',
            'password' => bcrypt('123123'),
            'username' => 'hospital',
            'role'=>'hospital',
            'phone'=>'0424427683',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('hospital_details')->insert([
            'user_id'=>$hospital_id,
            'website' => 'hospital.com',
            'address_1'=>'test address1',
            'address_2'=>'test address2',
            'city'=>'New york',
            'zip'=>'60610',
            'state_id'=>'2',
            'logo' => '1.jpg',
            'banner' => '1.jpeg',
            'about_us' => 'This is about us',
            'our_strength' => 'This is strength',
            'employee_size_id' => 2,
            'contact_name'=>'Joe',
            'contact_email'=>'joe@gmail.com',
            'contact_phone'=>'675 767 877',
            'contact_designation'=>'Manager',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
