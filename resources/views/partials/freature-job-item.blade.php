<li class="col-md-6">
  <div class="jobint">
    <div class="row">
      <div class="col-md-2 col-sm-2"><img src="{{ $job->user->details->logoUrl }}" alt="{{ $job->title }}" /></div>
      <div class="col-md-7 col-sm-7">
        <h4><a href="{{ url('job/'.$job->id) }}">{{ $job->title }}</a></h4>
        <div class="company"><a href="#">{{ $job->user->name }}</a></div>
        <div class="jobloc">Permanent   - <span>{{ $job->city }}</span></div>
      </div>
      <div class="col-md-3 col-sm-3"><a href="{{ url('job/'.$job->id) }}" class="applybtn">Apply Now</a></div>
    </div>
  </div>
</li>