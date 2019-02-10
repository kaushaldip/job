@extends('layouts.employee')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            {{-- <div class="panel-heading"> 
                <h3 class="panel-title"> Settings</h3> 
            </div>  --}}
            <div class="panel-body"> 

                <div class="row">
                    <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                            <div class="formpanel"> 
                                <!-- Personal Information -->
                                <h5>Change Password</h5>
                                <div class="row">
                                	<div class="col-md-6">
                                       <div class="row">
                                       <div class="col-md-12">
                                           <div class="formrow {{ $errors->has('username') ? ' has-error' : '' }}">
                                               <input type="text" name="username" class="form-control" value="{{ auth()->user()->username }}" placeholder="Username">
                                               @if ($errors->has('username'))
                                                   <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                               @endif
                                           </div>
                                       </div>
                                        <div class="col-md-12">
                                            <div class="formrow {{ $errors->has('old_password') ? ' has-error' : '' }}">
                                                <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                                                @if ($errors->has('old_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('old_password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="formrow{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                                <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                                @if ($errors->has('new_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="formrow{{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
                                                <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm new password">
                                                @if ($errors->has('new_password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <input type="submit" class="btn" value="Update and Save">
                        </div>
                    </form>
                </div>
            </div>
            
        </div> 
    </div>
</div>
</div>
@endsection
