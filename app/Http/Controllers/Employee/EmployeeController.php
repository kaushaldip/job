<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('employee');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobs = \App\Job::with('state')->where('zip','=',auth()->user()->details->zip)->active()->get();
        $category_id = ($request->category == null) ? 0 : $request->category;
        if($request->category != null){
            $jobs = $jobs->filter(function($value,$key) use ($request){
                return $value->category_id == $request->category;
            });
        }
        return view('employee.home',compact('jobs','category_id'));
    }

}
