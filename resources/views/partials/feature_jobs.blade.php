<div class="section greybg">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Featured <span>Jobs</span></h3>
    </div>
    <!-- title end --> 

    <!--Featured Job start-->
    <ul class="jobslist row">
      <!--Job start-->
      @foreach($featured_jobs as $job)
        @include('partials.freature-job-item')
      @endforeach
      <!--Job end--> 
    </ul>

    <!--Featured Job end--> 

    <!--button start-->
    <div class="viewallbtn"><a href="job-listing.html">View All Featured Jobs</a></div>
    <!--button end--> 
  </div>
</div>