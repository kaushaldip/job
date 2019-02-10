@extends('layouts.employee')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            {{-- <div class="panel-heading"> 
                <h3 class="panel-title"> Profile</h3> 
            </div>  --}}
            <div class="panel-body"> 
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ employee_url('/profile') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="formpanel"> 
                                <!-- Personal Information -->
                                <h5>Personal Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{ isset($user->name) ? $user->name : old('name') }}" class="form-control" placeholder="Name" required>
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ isset($user->email) ? $user->email : old('email') }}" class="form-control" placeholder="Email">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('npi_email') ? ' has-error' : '' }}">
                                            <label>NPI Email</label>
                                            <input type="text" name="npi_email" value="{{ isset($user->details->npi_email) ? $user->details->npi_email : old('npi_email') }}" class="form-control" placeholder="NPI Email">
                                            @if ($errors->has('npi_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('npi_email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('program') ? ' has-error' : '' }}">
                                            <label>Program</label>
                                            <input type="text" name="program" value="{{ isset($user->details->program) ? $user->details->program : old('program') }}" class="form-control" placeholder="Program">
                                            @if ($errors->has('program'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('program') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('phone') ? ' has-error' : '' }}">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ isset($user->phone) ? $user->phone : old('phone') }}" class="form-control" placeholder="Phone">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>
                                    <h5>Contact</h5>
                                    <div class="row">                                    
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('address_1') ? ' has-error' : '' }}">
                                            <label>Address Line 1</label>
                                            <input type="text" name="address_1" value="{{ isset($user->details->address_1) ? $user->details->address_1 : old('address_1') }}" class="form-control" placeholder="Street address, P.O. Box, Campany name">
                                            @if ($errors->has('address_1'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address_1') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('address_2') ? ' has-error' : '' }}">
                                            <label>Address Line 2</label>
                                            <input type="text" name="address_2" value="{{ isset($user->details->address_2) ? $user->details->address_2 : old('address_2') }}" class="form-control" placeholder="Appartment, suite, unit, building, floor, etc ">
                                            @if ($errors->has('address_2'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address_2') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('city') ? ' has-error' : '' }}">
                                            <label>City</label>
                                            <input type="text" name="city" value="{{ isset($user->details->city) ? $user->details->city : old('city') }}" class="form-control" placeholder="Address">
                                            @if ($errors->has('city'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('state_id') ? ' has-error' : '' }}">
                                            <label>State</label>
                                             <select name="state_id" class="form-control">
                                            @include('employee.partials.states')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow required {{ $errors->has('zip') ? ' has-error' : '' }}">
                                            <label>Zip Code</label>
                                            <input type="text" name="zip" value="{{ isset($user->details->zip) ? $user->details->zip : old('zip') }}" class="form-control" placeholder="Zip Code">
                                            @if ($errors->has('zip'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zip') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h5>Recent Roles</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('job_title') ? ' has-error' : '' }}">
                                            <label>Job Title</label>
                                            <input type="text" name="job_title" value="{{ isset($user->job_title) ? $user->job_title : old('job_title') }}" class="form-control" placeholder="Job Title">
                                            @if ($errors->has('job_title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('job_title') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('company_name') ? ' has-error' : '' }}">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" value="{{ isset($user->company_name) ? $user->company_name : old('company_name') }}" class="form-control" placeholder="Company Name">
                                            @if ($errors->has('company_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('company_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('started') ? ' has-error' : '' }}">
                                            <label for="">Started</label>
                                            <input type="text" id="started" name="started" value="{{ $job->started ?? old('started') }}" class="form-control"  placeholder="Started">
                                            @if ($errors->has('started'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('started') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('finished') ? ' has-error' : '' }}">
                                            <label for="">Finished</label>
                                            <input type="text" id="finished" name="finished" value="{{ $job->finished ?? old('finished') }}" class="form-control"  placeholder="Finished">
                                            @if ($errors->has('finished'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('finished') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h5>Education Qualification</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('institute') ? ' has-error' : '' }}">
                                            <label>Institute</label>
                                            <input type="text" name="institute" value="{{ isset($user->institute) ? $user->institute : old('institute') }}" class="form-control" placeholder="Institute">
                                            @if ($errors->has('institute'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('institute') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('degree') ? ' has-error' : '' }}">
                                            <label>Degree</label>
                                            <input type="text" name="degree" value="{{ isset($user->degree) ? $user->degree : old('degree') }}" class="form-control" placeholder="Degree">
                                            @if ($errors->has('degree'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('degree') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('started') ? ' has-error' : '' }}">
                                            <label for="">Started</label>
                                            <input type="text" id="started" name="started" value="{{ $job->started ?? old('started') }}" class="form-control"  placeholder="Started">
                                            @if ($errors->has('started'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('started') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('finished') ? ' has-error' : '' }}">
                                            <label for="">Finished</label>
                                            <input type="text" id="finished" name="finished" value="{{ $job->finished ?? old('finished') }}" class="form-control"  placeholder="Finished">
                                            @if ($errors->has('finished'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('finished') }}</strong>
                                            </span>
                                            @endif
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
