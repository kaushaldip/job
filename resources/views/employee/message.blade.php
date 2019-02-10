@extends('layouts.employee')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> {{ $user->name }}</h3> 
            </div> 
            <div class="panel-body message-panel"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="chat">   
                            <div class="chat-history">
                                <ul class="chat-ul">
                                @include('partials.message-item')
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form action="{{ employee_url('/message/job/'.$job->id.'/user/'.$user->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="body" class="form-control" placeholder="Type message here">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Send</button>
                            </span>
                        </div><!-- /input-group -->
                        </form>
                    </div><!-- /.col-lg-6 -->
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
