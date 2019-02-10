<div class="footerWrap">
      <div class="container">
        <div class="row"> 
          <!--About Us-->

          <div class="col-md-4 col-sm-4">
            <h5>Quick Links</h5>
            <!--Quick Links menu Start-->
            <ul class="quicklinks">
              <li><a href="{{ url('about') }}">About us</a></li>
              {{-- <li><a href="#">Company Listings</a></li> --}}
              {{-- <li><a href="#">Success Stories</a></li> --}}
              {{-- <li><a href="#">Contact Us</a></li> --}}
            </ul>
          </div>
         
          <!--About us End--> 

          <!--Quick Links-->
          <div class="col-md-4 col-sm-4">
            <h5>Quick Access</h5>
            <!--Quick Links menu Start-->
            <ul class="quicklinks">
              <li><a href="{{ url('healthcare_professionals') }}">Healthcare Professionals</a></li>
              <li><a href="{{ url('medical_facility') }}">Medical Facility</a></li>
              {{-- <li><a href="#">Featured Jobs</a></li> --}}
            </ul>
          </div>
          <!--Quick Links menu end--> 

          <!--Jobs By Industry-->
          <div class="col-md-4 col-sm-4">
            <h5>My Account</h5>
            <!--Industry menu Start-->
            <ul class="quicklinks">
              <li><a href="{{ url('register') }}">Register</a></li>
              <li><a href="{{ url('login') }}">Login</a></li>
              <li><a href="{{ url('login') }}">My Account</a></li>
            </ul>
            <!--Industry menu End-->
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer end--> 

    <!--Copyright-->
    <div class="copyright">
      <div class="container">
        <div class="bttxt">Copyright &copy; 2017 {{ config('app.name', 'Laravel') }}. All Rights Reserved.</div>
      </div>
    </div>