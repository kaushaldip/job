<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use \App\Category;
use \App\EmployeeSize;
use Validator;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
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
    
	public function profile()
	{
		$user = auth()->user();
		return view('employee.profile',compact('user'));
	}
	public function updateProfile(Request $request)
	{
		$user = auth()->user();
		$this->validate($request, [
			'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
			'phone' => 'required|string',
			'name' => 'required|string',
			]);

		$user
		->fill($request->only('name','email','phone'))
		->save();

		return redirect(employee_url('/profile'))->with([
			'msg' => 'Profile updated successfully'
			]);
	}
}
