@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">Enter new Expiry Date</h3> 
                <a href="#" onclick="$('#form-post').submit();" class="btn btn-success pull-right" style="margin-top: -25px;">Save</a>
                <a href="{{ hospital_url('/job') }}" class="btn btn-danger pull-right" style="margin-top: -25px;margin-right: 10px;">Back</a>
            </div> 
            <div class="panel-body"> 
                <form method="POST" action="{{ ($job) ? hospital_url('/job/'.$job->id.'/active') : "" }}" id="form-post" class="formpanel">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="formrow{{ $errors->has('expires_at') ? ' has-error' : '' }}">
                                <label for="">Expires At</label>
                                <input type="text" id="active_expires_at" name="expires_at" value="{{ $job->expires_at ?? old('expires_at') }}" class="form-control" placeholder="Expire Date">
                                @if ($errors->has('expires_at'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('expires_at') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                       </div>
                        <hr>
                        <br>
                        <input type="submit" class="btn" value="Submit">
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
@endsection
