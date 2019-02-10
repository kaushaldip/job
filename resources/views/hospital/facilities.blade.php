@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> Facilities</h3> 
            </div> 
            <div class="panel-body"> 
            <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="formpanel"> 
                                <!-- Personal Information -->
                                <h5>Personal Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <input type="text" name="name" class="form-control" placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <input type="text" name="website" class="form-control" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <input type="text" name="address" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow">
                                            <input type="text" name="designation" class="form-control" placeholder="Designation">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <input type="submit" class="btn" value="Update and Save">
                            </div>
                        </div>
                    </div>
                </div>
            
            </div> 
        </div>
    </div>
</div>
@endsection
