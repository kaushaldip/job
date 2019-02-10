<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('admin', ['except' => ['login','logAdmin']]);
	}

    public function home()
    {
    	return view('admin.home');
    }

    public function login()
    {
    	if (session()->get('admin_id')) {
            return redirect('/');
        }
    	return view('admin.login');
    }

    public function logAdmin(Request $request)
    {
    	// dd($request->all());
    	$this->validate($request,[
    		'username'=>'required',
    		'password'=>'required',
		]);

    	$admin = \App\Admin::where('username','=',$request->username)
    	->get()->first();

    	if($admin == null || !Hash::check($request->password,$admin->password) ) {
    		return redirect()->back()->withInput(['username'=>$request->username])->withErrors(['username'=>'Invalid Username or password']);
    	}
    	session()->put('admin_id',$admin->id);
    	return redirect('/');	
    }

    public function logout(){
		session()->flush();
		return redirect('/login');
    }

}
