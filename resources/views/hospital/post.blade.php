@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info"> 
            {{-- <div class="panel-heading"> 
                <h3 class="panel-title">{{ ($job) ? "Edit Job" : "Create New Job" }}</h3> 
            </div> --}} 
            <div class="panel-body"> 
                <a href="#" onclick="$('#form-post').submit();" class="btn btn-success">Save</a>
                <a href="{{ hospital_url('/job') }}" class="btn btn-danger">Back</a>
                <form method="POST" action="{{ ($job) ? hospital_url('/job/'.$job->id.'/edit') : "" }}" id="form-post" class="formpanel">
                    {{ csrf_field() }}
                    <h4>Job Details</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="formrow required {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="">Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option @if( $job && $job->category_id == $category->id) selected="selected" @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('position') ? ' has-error' : '' }}">
                                <label for="">Position</label>
                                <input type="text" name="position" value="{{ $job->position ?? old('position') }}" class="form-control" placeholder="Position">
                                @if ($errors->has('position'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('position') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{ $job->title ?? old('title') }}" class="form-control" placeholder="Title">
                                @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('start_at') ? ' has-error' : '' }}">
                                <label for="">Start At</label>
                                <input type="text" id="start_at" name="start_at" value="{{ $job->start_at ?? old('start_at') }}" class="form-control"  placeholder="Start Date">
                                @if ($errors->has('start_at'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('start_at') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('expires_at') ? ' has-error' : '' }}">
                                <label for="">Expires At</label>
                                <input type="text" id="expires_at" name="expires_at" value="{{ $job->expires_at ?? old('expires_at') }}" class="form-control" placeholder="Expire Date">
                                @if ($errors->has('expires_at'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('expires_at') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('address_1') ? ' has-error' : '' }}">
                                <label for="">Address Line 1</label>
                                <input type="text" name="address_1" value="{{ $job->address_1 ?? old('address_1') }}" class="form-control" placeholder="Street address, P.O. Box, Campany name">
                                @if ($errors->has('address_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address_1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow{{ $errors->has('address_2') ? ' has-error' : '' }}">
                                <label for="">Address Line 2</label>
                                <input type="text" name="address_2" value="{{ $job->address_2 ?? old('address_2') }}" class="form-control" placeholder="Appartment, suite, unit, building, floor, etc ">
                                @if ($errors->has('address_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address_2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="">City</label>
                                <input type="text" name="city" value="{{ $job->city ?? old('city') }}" class="form-control" placeholder="City">
                                @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('state_id') ? ' has-error' : '' }}">
                                <label for="">State</label>
                                <select name="state_id" class="form-control">
                                    @include('hospital.partials.states')
                                </select>
                                @if ($errors->has('state_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('state_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('zip') ? ' has-error' : '' }}">
                                <label for="">Zip Code</label>
                                <input type="text" name="zip" value="{{ $job->zip ?? old('zip') }}" class="form-control" placeholder="Zip Code">
                                @if ($errors->has('zip'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('zip') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="formrow required {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="">Type</label>
                                <select name="type" class="form-control">
                                    <option @if( $job && $job->type == 1) selected="selected" @endif value="1">Full Time</option>
                                    <option @if( $job && $job->type == 2) selected="selected" @endif value="2">Part Time</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                        
                        <div class="col-md-12">
                            <div class="formrow required {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description">{{ $job->description ?? old('Description') }}</textarea>
                                @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="formrow required {{ $errors->has('roles') ? ' has-error' : '' }}">
                                <label for="">Roles</label>                                
                                <textarea name="roles" class="form-control" placeholder="Roles">{{ $job->roles ?? old('roles') }}</textarea>
                                @if ($errors->has('roles'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('roles') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="formrow required {{ $errors->has('skills') ? ' has-error' : '' }}">
                                <label for="">Skills</label>
                                <textarea name="skills" class="form-control" placeholder="Skills">{{ $job->skills ?? old('skills') }}</textarea>
                                @if ($errors->has('skills'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('skills') }}</strong>
                                </span>
                                @endif
                            </div>
                            <hr>
                            <br>
                            <input type="submit" class="btn" value="Publish">
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
@endsection
