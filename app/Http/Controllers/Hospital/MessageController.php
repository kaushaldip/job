<?php
namespace App\Http\Controllers\Hospital;
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

    public function createFromJob(Job $job,User $user){
    	$messages = Message::where(['job_id'=>$job->id])->whereOr(['sender_id'=>$user->id,'receiver_id'=>$user->id])->get()->all();
    	return view('hospital.message',compact('job','user','messages'));
    }

    public function saveMessage(Job $job,User $user,Request $request){
    	Message::create([
    		'sender_id'=>auth()->user()->id,
    		'receiver_id'=>$user->id,
    		'job_id'=>$job->id,
    		'body'=>$request->input('body')
    	]);
    	$messages = Message::where(['job_id'=>$job->id])->whereOr(['sender_id'=>$user->id,'receiver_id'=>$user->id])->get()->all();
    	return redirect(hospital_url('/message/job/'.$job->id.'/user/'.$user->id));
    }

}
