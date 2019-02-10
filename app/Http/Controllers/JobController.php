<?php

namespace App\Http\Controllers;

use \App\Category;
use Illuminate\Http\Request;
use \App\Job;
use \App\Apply;

class JobController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showJob']]);
        $this->middleware('employee', ['only' => ['select','apply']]);
    }
    
    public function index()
    {
        return view('hospital.job');
    }

    public function applied(){
         return view('employee.applied');
    }

    public function past(){
        return view('employee.past');
    }

    public function showJob(Job $job){
        return view('job.show',compact('job'));
    }

    public function success(){
        return view('job.success');
    }

    public function select(Job $job){
        $cvs = auth()->user()->cvs;
        $documents = auth()->user()->documents;
        return view('job.select',compact('job','cvs','documents'));
    }

    public function apply(Job $job,Request $request)
    {
        $apply = ['job_id'=>$job->id];
        if($request->resume != -1){
            $apply = array_merge($apply,['cv_id'=>$request->resume]);
        }
        if($request->document != -1){
            $apply = array_merge($apply,['document_id'=>$request->document]);
        }
        try{
            auth()->user()->applies()->create($apply);
        }catch(\Exception $ex){
            return redirect(url('/error'));
        }
        return redirect(url('/success'));
    }

    public function post()
    {
        $categories = Category::orderBy('name')->get();
        $job = false;
        return view('hospital.post', compact('categories','job'));
    }
    
    public function edit(Job $job){
        $categories = Category::orderBy('name')->get();
        return view('hospital.post', compact('categories','job'));
    }

    public function view(Job $job){
        return view('hospital.view', compact('job'));
    }

    public function accept(Apply $apply){
        if($apply->job->user_id != auth()->user()->id)
            return abort(404);
        $apply->job_apply_status_id = JOB_ACCEPTED;
        $apply->save();
        return redirect()->back();
    }

    public function decline(Apply $apply){
        if($apply->job->user_id != auth()->user()->id)
            return abort(404);
        $apply->job_apply_status_id = JOB_DECLINED;
        $apply->save();
        return redirect()->back();
    }

    public function active(Job $job){
        return view('hospital.active', compact('categories','job'));
    }

    public function activeJob(Job $job,Request $request){
        // dd($job);
        $this->validate($request, [
                'expires_at' => 'required',
        ]);
        $job->fill($request->all())->save();
        return redirect(hospital_url('/job'))->with([
            'msg' => 'Job Updated Successfully'
        ]);
    }

    public function update(Job $job,Request $request){
        $this->validate($request, [
                'position' => 'required|string',
                'title' => 'required|string',
                'description' => 'required|string',
                'roles' => 'required|string',
                'skills' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
                'category_id' => 'required',
        ]);
        $job->fill($request->all())->save();
        return redirect(hospital_url('/job'))->with([
            'msg' => 'Job Updated Successfully'
        ]);
    }

    public function save(Request $request)
    {
    	$this->validate($request, [
    			'position' => 'required|string',
    			'title' => 'required|string',
    			'description' => 'required|string',
    			'roles' => 'required|string',
    			'skills' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
    			'category_id' => 'required',
		]);
		
		auth()->user()->jobs()->create($request->all());

    	return redirect(hospital_url('/job'))->with([
    		'msg' => 'Job Posted Successfully'
    	]);
    }
}
