<?php

namespace App\Http\Controllers\Admin;

use App\EmployeeSize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = \App\EmployeeSize::all();
        return view('admin.employee_size.list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee_size.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        \App\EmployeeSize::create($request->all());

        return redirect(url('/employee_size'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeSize  $employee_size
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeSize $employee_size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeSize  $employee_size
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeSize $employee_size)
    {
        return view('admin.employee_size.form',compact('employee_size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeSize  $employee_size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeSize $employee_size)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $employee_size->fill($request->all());
        $employee_size->save();

        return redirect(url('/employee_size'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmployeeSize  $employee_size
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeSize $employee_size)
    {
        $employee_size->delete();
        return redirect(url('/employee_size'));
    }
}
