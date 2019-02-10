<div class="section greybg">
      <div class="container"> 
        <!-- title start -->
        <div class="titleTop">
          <div class="subtitle">Here You Can See</div>
          <h3>Latest <span>Jobs</span></h3>
        </div>
        <!-- title end -->

        <ul class="jobslist row">
          
          @foreach($featured_jobs as $job)
            @include('partials.freature-job-item')
          @endforeach



        </ul>
        <!--view button-->
        <div class="viewallbtn"><a href="#">View All Latest Jobs</a></div>
        <!--view button end--> 
      </div>
    </div>