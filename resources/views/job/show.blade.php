@extends('layouts.app')

@section('content')
<div class="container"> 
    
    <!-- Job Header start -->
    <div class="job-header">
      <div class="jobinfo">
        <div class="row">
          <div class="col-md-8">
            <h2>{{ $job->title }}</h2>
            <div class="ptext">Date Posted: {{ $job->created_at->format('m/d/Y') }}</div>
            {{-- <div class="salary">Monthly Salary: <strong>$500 - $3000</strong></div> --}}
          </div>
          <div class="col-md-4">
            <div class="companyinfo">
              <div class="companylogo"><img src="{{ $job->user->details->logoUrl }}" alt="{{ $job->title }}"></div>
              <div class="title"><a href="#.">{{ $job->user->name }}</a></div>
              <div class="ptext">{{ $job->city }}</div>
              {{-- <div class="opening"><a href="#.">8 Current Jobs Openings</a></div> --}}
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="jobButtons"> 
      @if($job->applied)
      <a href="{{ employee_url('/applied/') }}" class="btn apply"> View Application</a> 
      @else
      <a href="{{ url('select/'.$job->id) }}" class="btn apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> Apply Now</a> 
      @endif
      {{-- <a href="#." class="btn"><i class="fa fa-envelope" aria-hidden="true"></i> Email to Friend</a> 
      <a href="#." class="btn"><i class="fa fa-black-tie" aria-hidden="true"></i> Job Aleart</a> 
      <a href="#." class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save This Job</a> 
      <a href="#." class="btn report"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report Abuse</a>  --}}
      </div>
    </div>
    
    <!-- Job Detail start -->
    <div class="row">
      <div class="col-md-8"> 
        <!-- Job Description start -->
        <div class="job-header">
          <div class="contentbox">
            <h3>Job Description</h3>
            <p>
            {{ $job->description }}
            </p>
            <br>
            <h3>Skills</h3>
            <ul>
            {!! $job->skills !!}
            </ul>
            <h3>Roles</h3>
            <ul>
            {!! $job->roles !!}
            </ul>
          </div>
        </div>
        <!-- Job Description end --> 
        
        <!-- related jobs start -->
        {{-- <div class="relatedJobs">
          <h3>Related Jobs</h3>
          <ul class="searchList">
            <!-- Job start -->
            <li>
              <div class="row">
                <div class="col-md-8 col-sm-8">
                  <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name" /></div>
                  <div class="jobinfo">
                    <h3><a href="#.">Technical Database Engineer</a></h3>
                    <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                    <div class="location">Permanent   - <span>New York</span></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="listbtn"><a href="#.">Apply Now</a></div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
            </li>
            <!-- Job end --> 
            
            <!-- Job start -->
            <li>
              <div class="row">
                <div class="col-md-8 col-sm-8">
                  <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name" /></div>
                  <div class="jobinfo">
                    <h3><a href="#.">Technical Database Engineer</a></h3>
                    <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                    <div class="location">Permanent   - <span>New York</span></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="listbtn"><a href="#.">Apply Now</a></div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
            </li>
            <!-- Job end --> 
            
            <!-- Job start -->
            <li>
              <div class="row">
                <div class="col-md-8 col-sm-8">
                  <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name" /></div>
                  <div class="jobinfo">
                    <h3><a href="#.">Technical Database Engineer</a></h3>
                    <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                    <div class="location">Permanent   - <span>New York</span></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="listbtn"><a href="#.">Apply Now</a></div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
            </li>
            <!-- Job end -->
          </ul>
        </div> --}}
      </div>
      <!-- related jobs end -->
      
      <div class="col-md-4"> 
        <!-- Job Detail start -->
        <div class="job-header">
          <div class="jobdetail">
            <h3>Job Detail</h3>
            <ul class="jbdetail">
              <li class="row">
                <div class="col-md-6 col-xs-6">Job Id</div>
                <div class="col-md-6 col-xs-6"><span>{{ $job->id }}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">City</div>
                <div class="col-md-6 col-xs-6"><span>{{ $job->city }}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Company</div>
                <div class="col-md-6 col-xs-6"><a href="#.">{{ $job->user->name }}</a></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Type</div>
                <div class="col-md-6 col-xs-6"><span>{{ ($job->type == 1) ? 'Full Time' : 'Part Time' }}</span></div>
              </li>
              {{-- <li class="row">
                <div class="col-md-6 col-xs-6">Employment Status</div>
                <div class="col-md-6 col-xs-6"> <span class="permanent">Permanent</span> <span class="contract">Contract</span> <span class="freelance">Freelance</span> </div>
              </li> --}}
              {{-- <li class="row">
                <div class="col-md-6 col-xs-6">Employment Type</div>
                <div class="col-md-6 col-xs-6"><span>Manager</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Positions</div>
                <div class="col-md-6 col-xs-6"><span>5</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Career Level</div>
                <div class="col-md-6 col-xs-6"><span>Experience</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Experience</div>
                <div class="col-md-6 col-xs-6"><span>2 Years</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Gender</div>
                <div class="col-md-6 col-xs-6"><span>Male</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Nationality</div>
                <div class="col-md-6 col-xs-6"><span>United States</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Degree</div>
                <div class="col-md-6 col-xs-6"><span>Masters</span></div>
              </li> --}}
            </ul>
          </div>
        </div>
        
        <!-- Contact Company start -->
        {{-- <div class="job-header">
          <div class="jobdetail">
            <h3>Contact Themeforest</h3>
            <div class="formpanel">
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="formrow">
                <textarea class="form-control" placeholder="Message"></textarea>
              </div>
              <input type="submit" class="btn" value="Submit">
            </div>
          </div>
        </div> --}}
        
        <!-- Google Map start -->
        {{-- <div class="job-header">
          <div class="jobdetail">
            <h3>Google Map</h3>
            <div class="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13276.272465119835!2d72.97962462269287!3d33.70718629417979!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1480401216309" allowfullscreen></iframe>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>

  @endsection