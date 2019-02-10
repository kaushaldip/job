@extends('layouts.app')

@section('content')
<form action="{{ url('apply/'.$job->id) }}" method="POST">
{{ csrf_field() }}
<div class="error-page-wrap">
  <div class="container">

    <div class="errormain">
      <h3>Documents for the job</h3>
    </div>

    <div class="document_list">
      <div class="row">
        <div class="col-md-6">
          <div class="">
            <h4>Resume</h4>
            <div class="btn-group btn-group-vertical" data-toggle="buttons">
            <label class="btn active">
              <input type="radio" name="resume" value="-1" checked>
                <i class="fa fa-circle-o fa-2x"></i>
                <i class="fa fa-dot-circle-o fa-2x"></i>
                <span> Don't include resume</span>
            </label>
            @foreach($cvs as $cv)
            <label class="btn">
              <input type="radio" name="resume" value="{{ $cv->id }}">
                <i class="fa fa-circle-o fa-2x"></i>
                <i class="fa fa-dot-circle-o fa-2x"></i>
                <span> {{ $cv->client_file }}</span>
            </label>
            @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="">
            <h4>Document</h4>
            <div class="btn-group btn-group-vertical" data-toggle="buttons">
            <label class="btn active">
              <input type="radio" name="document" value="-1" checked>
                <i class="fa fa-circle-o fa-2x"></i>
                <i class="fa fa-dot-circle-o fa-2x"></i>
                <span> Don't include document</span>
            </label>
            @foreach($documents as $document)
            <label class="btn">
              <input type="radio" name="document" value="{{ $document->id }}">
                <i class="fa fa-circle-o fa-2x"></i>
                <i class="fa fa-dot-circle-o fa-2x"></i>
                <span> {{ $document->client_file }}</span>
            </label>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="errormain">
      <div class="error-msg">
        <button type="submit" class="btn">Confirm</button> 
      </div>
    </div>
  </div>
</div>
</form>
@endsection