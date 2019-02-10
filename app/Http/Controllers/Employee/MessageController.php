<?php

namespace App\Http\Controllers\Employee;
use App\Apply;
use App\Message;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('employee.allMessage');
    }

    public function createFromJob(Job $job,User $user){
    	$messages = Message::where(['job_id'=>$job->id])->whereOr(['sender_id'=>$user->id,'receiver_id'=>$user->id])->get()->all();
    	return view('employee.message',compact('job','user','messages'));
    }

    public function saveMessage(Job $job,User $user,Request $request){
    	Message::create([
    		'sender_id'=>auth()->user()->id,
    		'receiver_id'=>$job->user->id,
    		'job_id'=>$job->id,
    		'body'=>$request->input('body')
    	]);
    	$messages = Message::where(['job_id'=>$job->id])->whereOr(['sender_id'=>$user->id,'receiver_id'=>$user->id])->get()->all();
    	return redirect(employee_url('/message/job/'.$job->id.'/user/'.$user->id));
    }
}
