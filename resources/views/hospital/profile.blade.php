@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            {{-- <div class="panel-heading">
                <h3 class="panel-title"> Profile</h3>
            </div> --}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ hospital_url('/profile') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="formpanel">
                                <!-- Personal Information -->
                                <h5>Company Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label>Hospital Name</label>
                                            <input type="text" name="name" value="{{ isset($user->name) ? $user->name : old('name') }}" class="form-control" placeholder="Hospital Name">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow {{ $errors->has('email') ? ' has-error' : '' }}">
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
                                        <div class="formrow{{ $errors->has('phone') ? ' has-error' : '' }}">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ isset($user->phone) ? $user->phone : old('phone') }}" class="form-control" placeholder="Phone">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('website') ? ' has-error' : '' }}">
                                            <label>Website</label>
                                            <input type="text" name="website" value="{{ isset($user->details->website) ? $user->details->website : old('website') }}" class="form-control" placeholder="Website">
                                            @if ($errors->has('website'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('website') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <label>Address</label>
                                            <input type="text" name="address" value="{{ isset($user->details->address) ? $user->details->address : old('address') }}" class="form-control" placeholder="Address">
                                            @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('employee_size_id') ? ' has-error' : '' }}">
                                            <label>Employee Size</label>
                                            <select name="employee_size_id" class="form-control">
                                                @foreach($employee_sizes as $size)
                                                <option @if($user->details->employee_size_id == $size->id) selected="selected" @endif value="{{ $size->id }}">{{ $size->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5>Contact Person</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                            <label>Name</label>
                                            <input type="text" value="{{ isset($user->details->contact_name) ? $user->details->contact_name : old('contact_name') }}" name="contact_name" class="form-control" placeholder="Name">
                                            @if ($errors->has('contact_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact_name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                            <label>Email</label>
                                            <input type="text" value="{{ isset($user->details->contact_email) ? $user->details->contact_email : old('contact_email') }}" name="contact_email" class="form-control" placeholder="Email">
                                            @if ($errors->has('contact_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact_email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                            <label>Phone</label>
                                            <input type="text" value="{{ isset($user->details->contact_phone) ? $user->details->contact_phone :  old('contact_phone') }}" name="contact_phone" class="form-control" placeholder="Phone">
                                            @if ($errors->has('contact_phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact_phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow{{ $errors->has('contact_designation') ? ' has-error' : '' }}">
                                            <label>Designation</label>
                                            <input type="text" value="{{ isset($user->details->contact_designation) ? $user->details->contact_designation :  old('contact_designation') }}" name="contact_designation" class="form-control" placeholder="Designation">
                                            @if ($errors->has('contact_designation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('contact_designation') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5>About Company</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="formrow{{ $errors->has('about_us') ? ' has-error' : '' }}">
                                            <label>About us</label>
                                            <textarea name="about_us" class="form-control" placeholder="About Us">{{ isset($user->details->about_us) ? $user->details->about_us :  old('about_us') }}</textarea>
                                            @if ($errors->has('about_us'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('about_us') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formrow{{ $errors->has('our_strength') ? ' has-error' : '' }}">
                                            <label>Strength</label>
                                            <textarea name="our_strength" class="form-control" placeholder="Our Strength">{{ isset($user->details->our_strength) ? $user->details->our_strength :  old('our_strength') }}</textarea>
                                            @if ($errors->has('our_strength'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('our_strength') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5>Company logo</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                @if($user->details->logo != '')
                                                    <img class="img-thumbnail" src="{{ $user->details->logoSmall }}" alt="">
                                                @endif

                                                {!! Form::file('logo', null) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <label>Banner</label>
                                            @if($user->details->banner != '')
                                                <img class="img-thumbnail" src="{{ $user->details->bannerSmall }}" alt="">
                                            @endif

                                            {!! Form::file('banner', null) !!}
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
