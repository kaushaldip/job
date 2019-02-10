<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="{{ url('/') }}" class="logo"><img style="width:30px;" src="{{ asset('images/logo_new.jpg') }}" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              {{-- <li><a href="{{ url('/') }}">Home</a></li> --}}
              {{-- <li><a href="{{ url('/about') }}">About us</a></li> --}}
              {{-- <li> 
                <a href="{{ url('/healthcare_professionals') }}">Healthcare Professionals</a> 
                @if(Auth::guest())
                <a href="{{ url('/login') }}" class="btn btn-default btn-xs btn-login">Login</a>
                @endif
              </li> --}}
              {{-- <li>
                <a href="{{ url('/medical_facility') }}">Medical Facility</a>
                @if(Auth::guest())
                <a href="{{ url('/login') }}" class="btn btn-default btn-xs btn-login">Login</a>
                @endif
              </li> --}}
              @if(Auth::guest())
              <li class="postjob"><a href="{{ url('/login') }}">Login/Create Account</a></li>
              {{-- <li class="jobseeker"><a href="{{ url('/register') }}">Register</a></li> --}}
              @else
              <li><a href="{{ url('/home') }}">Dashboard</a></li>
              @if(Auth::user()->role == 'employee')
              <li><a href="{{ employee_url('/settings') }}">Settings</a></li>
              @else
              <li><a href="{{ hospital_url('/settings') }}">Settings</a></li>
              @endif
              <li class="postjob">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              @endif
            </ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>