@extends('layouts.app')

@section('content')
<div class="error-page-wrap">
  <div class="container">

    <div class="errormain">
      <h3>Successfully Applied for the job</h3>
      <div class="error-msg">
        <p>You have successfully applied for the job.</p>
        <a href="{{ url('/home') }}" class="btn">Go to Dashboard</a> </div>
      </div>
    </div>
  </div>
  @endsection