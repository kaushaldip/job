@extends('layouts.app')

@section('content')
<div class="error-page-wrap">
  <div class="container">

    <div class="errormain">
      <h3>There was an Error</h3>
      <div class="error-msg">
        <a href="{{ url('/') }}" class="btn">Go to Homepage</a> </div>
      </div>
    </div>
  </div>
  @endsection