<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_id = DB::table('users')->insertGetId([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => bcrypt('123123'),
            'username' => 'john',
            'role' => 'employee',
            'phone' => '0424427683',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('employee_details')->insert([
            'user_id'=>$employee_id,
            'npi_email'=>'npidoc@npi.com',
            'program'=>'program',
            'address_1'=>'address1',
            'address_2'=>'address2',
            'city'=>'city',
            'state_id'=>'5',
            'zip'=>'60610',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('cvs')->insert([
            'user_id'=>$employee_id,
            'file'=>'user_resume/sik8RJ9UUGAV5qz7ZvcPMITn3knQBrFtOFPwCRJv.docx',
            'client_file'=>'Resume.docx',
            'status'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('cvs')->insert([
            'user_id'=>$employee_id,
            'file'=>'user_resume/ftCc1Ip7iSw0WRdyQ0fIzAZ5prmIZB5ZiR82PZW8.pdf',
            'client_file'=>'Updated Resume.pdf',
            'status'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);  
        DB::table('documents')->insert([
            'user_id'=>$employee_id,
            'file'=>'user_documents/QfwJnIfsJ9ReXYwI3LoWcW2iL0gyhmZmYtnqcXIr.docx',
            'client_file'=>'Imp Document.docx',
            'status'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
