<?php
use App\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;

Route::get('/', function () {
	$featured_jobs = Job::active()->get();
    return view('welcome',compact('featured_jobs'));
})->name('main');;
Auth::routes();
Route::get('/search',function(Request $request){
	$q = $request->q;
	$category_id = $request->category;
	$states = \App\State::all()->pluck('name');
	if(ctype_digit($q)){
		$jobs = \App\Job::with('state')->where('zip','=',$q)->active()->get();
	}else if($states->search($q) != false){
		$jobs = \App\Job::with('state')->where('state_id','=',$states->search($q)+1)->active()->get();
	}else{
		$jobs = \App\Job::with('state')->where('city','like','%'.$q.'%')->active()->get();
	}
	if($request->category != "0"){
		$jobs = $jobs->filter(function($value,$key) use ($request){
			return $value->category_id == $request->category;
		});
	}
	if($request->start_date != null){
		$jobs = $jobs->filter(function($value,$key) use ($request){
			$job_start = Carbon::createFromFormat('m/d/Y', $value->start_at);
			$start_date = Carbon::createFromFormat('m/d/Y', $request->start_date);
			return $job_start->gt($start_date);
		});
	}
	return view('search',compact('jobs','q','category_id'));
});
Route::get('/about', function () {    return view('about'); });
Route::get('/healthcare_professionals', function () {    return view('healthcare_professionals'); });
Route::get('/medical_facility', function () {    return view('medical_facility'); });
Route::get('/about', function () {    return view('about'); });
Route::get('choose/register',function (){  return view('auth.choose'); });
Route::get('/home', function () {
    if(auth()->user()->role == 'hospital'){
        return view('hospital.home');
    }
    return redirect(employee_url('/home'));
});
Route::get('/job/{job}','JobController@showJob');
Route::get('/select/{job}','JobController@select');
Route::post('/apply/{job}','JobController@apply');
Route::get('/success','JobController@success');
Route::get('/error',function(){ return view('job.error'); });