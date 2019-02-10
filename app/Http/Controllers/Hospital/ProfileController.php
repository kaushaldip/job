<?php

namespace App\Http\Controllers\Hospital;

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
		$employee_sizes = EmployeeSize::all();
		return view('hospital.profile',compact('user','employee_sizes'));
	}
	public function updateProfile(Request $request)
	{
		$user = auth()->user();
		$this->validate($request, [
			'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
			'phone' => 'required|string',
			'address' => 'required|string',
			'about_us' => 'required|string',
			'our_strength' => 'required|string',
			'contact_name' => 'required|string',
			'contact_email' => 'required|string|email',
			'contact_phone' => 'required|string',
			'contact_designation' => 'required|string',
			]);

		$user
		->fill($request->only('name','email','phone'))
		->save();

		$user
		->details
		->fill($request->except('name','logo','phone','banner','email'))
		->save(); 

		if($request->hasFile('logo')){
			$imageName_200 = $user->id . '-250X200' . '.' . $request->file('logo')->getClientOriginalExtension();
			$imageName = $user->id . '.' . $request->file('logo')->getClientOriginalExtension();
			$request->file('logo')->move(
				base_path() . '/public/user/logo/', $imageName
				);
			$user
			->details
			->fill(['logo'=>$imageName])
			->save();
			$img = Image::make(url('user/logo/'.$imageName));
			Image::make(base_path() . '/public/user/logo/'.$imageName)->resize(250, 200)->save(base_path() . '/public/user/logo/'.$imageName_200);
		}

		if($request->hasFile('banner')){
			$imageName_200 = $user->id . '-250X200' . '.' . $request->file('banner')->getClientOriginalExtension();
			$imageName = $user->id . '.' . 
			$request->file('banner')->getClientOriginalExtension();
			$request->file('banner')->move(
				base_path() . '/public/user/banner/', $imageName
				);
			$user
			->details
			->fill(['banner'=>$imageName])
			->save();
			Image::make(base_path() . '/public/user/banner/'.$imageName)->resize(250, 200)->save(base_path() . '/public/user/banner/'.$imageName_200);
		}


		return redirect(hospital_url('/profile'))->with([
			'msg' => 'Profile updated successfully'
			]);
	}
}
