<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Hash;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function settings()
    {
        return view('employee.settings');
    }
    public function updateSettings(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255|unique:users,username,'.auth()->id(),
        'old_password' => 'required',
        'new_password' => 'required|string|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return view('settings')
        ->withInput($request->all())
        ->withErrors($validator, 'errors');
        }
    
        if (!Hash::check($request->input('old_password'), Auth()->user()->password)) {
            $validator->errors()->add('old_password', 'Invalid Password');
            return view('settings')
        ->withInput($request->all())
        ->withErrors($validator, 'errors');
        }

        Auth()->user()->password = Hash::make($request->input('new_password'));
        Auth()->user()->username = $request->input('username');
        Auth()->user()->update();

        return redirect(employee_url('/settings'))->with([
        'msg' => 'Settings updated successfully'
        ]);
    }
}
