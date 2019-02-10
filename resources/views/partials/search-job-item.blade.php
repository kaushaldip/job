<li class="col-md-12">
  <div class="jobint">
    {{-- <a href="#job-modal-{{ $job->id }}" class="popup-modal"></a> --}}
    <div class="row">
      <div class="col-md-2 col-sm-2"><img src="{{ $job->user->details->logoUrl }}" alt="{{ $job->title }}" /></div>
      <div class="col-md-7 col-sm-7">
        <h4><a href="{{ url('job/'.$job->id) }}">{{ $job->title }}</a></h4>
        <div class="company"><a href="#">{{ $job->user->name }}</a></div>
        <div class="jobloc">Permanent   - <span>{{ $job->city }}</span></div>
      </div>
      <div class="col-md-3 col-sm-3"><a href="#job-modal-{{ $job->id }}" class="applybtn popup-modal">View details</a></div>
    </div>
  </div>
  <div id="job-modal-{{ $job->id }}" class="white-popup-block mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="row">
      <div class="col-md-2 col-sm-2"><img src="{{ $job->user->details->logoUrl }}" alt="{{ $job->title }}" /></div>
      <div class="col-md-7 col-sm-7">
        <h3><a href="{{ url('job/'.$job->id) }}">{{ $job->title }}</a></h3>
        <h4>Job Description</h4>
        <p>{{ $job->description }}</p>
        <div class="company"><a href="#">{{ $job->user->name }}</a></div>
        <div class="jobloc">Permanent   - <span>{{ $job->city }}</span></div>
        <div class="jobloc">Date Posted   - <span>{{ $job->created_at->format('m/d/Y') }}</span></div>
        <div class="jobloc">Type   - <span>{{ ($job->type == 1) ? 'Full Time' : 'Part Time' }}</span></div>
        <div class="jobButtons" style="padding-left: 0px;">
          <a href="{{ url('job/'.$job->id) }}" class="btn apply">
            <i class="fa fa-paper-plane" aria-hidden="true"></i> Apply Now
          </a>
        </div>
      </div>
    </div>
  </div>

</li>