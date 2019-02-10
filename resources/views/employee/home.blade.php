@extends('layouts.employee')
@section('main-content')
<script>
  var jobs = {!! $jobs !!}
</script>
<!-- About -->
<div class="row">
  <div class="col-md-12">
    <form action="{{ employee_url('/home') }}" method="get">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
          <div class="form-group">
            <select name="category" class="form-control">
              <option value="0">Select Categories</option>
              @foreach(\App\Category::all() as $category)
                <option @if($category_id == $category->id ) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <select name="shift" class="form-control">
                <option value="0">Select Shift</option>
                <option value="1">Morning</option>
                <option value="2">Day</option>
                <option value="3">Evening</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Start Date"/>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <input type="number" min="0" class="form-control" name="length" placeholder="Length of Job"/>
          </div>
        </div>
        <div class="col-md-2">
          <input type="submit" class="btn btn-block" value="Search">
        </div>
      </div>
      </form>
  </div>
  <div class="col-md-6">
    <div id="map"></div>
  </div>
  <div class="col-md-6">
    <h3 style="margin-top: 20px;">Hi {{ auth()->user()->name }}, here are the list of jobs near you.</h3>
    <form action="{{ employee_url('/home') }}" method="get">
      <div class="row">
      </div>
      {{-- <div class="row">
        <div class="col-md-12">
          <p id="adv_show"><a href="javascript:void(0);" onclick="show_adv_option(); return false;">Advance Options</a></p>
        </div>
        <div class="col-md-12">
          <p id="adv_hide"><a href="javascript:void(0);" onclick="hide_adv_option(); return false;">Hide</a></p>
        </div>
      </div> --}}
      
      </form>
    <div class="search_results">
      <ul class="jobslist row">
        @foreach($jobs as $job)
        @include('partials.search-job-item')
        @endforeach
      </ul>
    </div>
  </div>
</div>
<script>
  // geocodeAddress(geocoder, 1344 N Wells St, Chicago, IL 60610, USA, map);
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
    });
    var geocoder = new google.maps.Geocoder();
    for(i in jobs){
      var job = jobs[i];
      var address = job.address_1+', '+job.city+', '+job.state.code+' '+job.zip+', USA';
      geocodeAddress(geocoder, address, map);
      // console.log(address);
    }
  }

  function geocodeAddress(geocoder, address, resultsMap) {
    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location
        });
      } else {
        // alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCchlo1ATg3WbLe7D9Jq1ESJ9oBXQ9nH_8&callback=initMap"></script>
@endsection
