@extends('layouts.app')
@section('content')

<div class="about-wraper"> 
  <!-- About -->
  <div class="container">
    <div class="row">
    <div class="col-md-5">
          <div class="postimg"><img src="images/about-us-img2.jpg" alt="your alt text"></div>
        </div>
      <div class="col-md-7">
        <h2>Healthcare Professionals</h2>
        <p>Doctus omnesque duo ne, cu vel offendit erroribus. Laudem hendrerit pro ex, cum postea delectus ad. Te pro feugiat perpetua tractatos. Nam movet omnes id, usu te meis corpora. Augue doming quaestio vix at. Sumo duis ea sed, ut vix euismod lobortis prodesset, everti necessitatibus mei cu.<br>
          <br>
          Nam ea eripuit assueverit, invenire delicatissimi ad pro, an dicam principes duo. Paulo prodesset duo ad. Duo eu summo verear. Natum gubergren definitionem id usu, graeco cetero ius ut.<br>
          <br>
          Unum postea sit an, iudico invenire expetenda ei sea, atqui fierent sed ut. Ex pri numquam indoctum suavitate, sed id movet mentitum consequat, cum et amet ipsum dolor. Unum postea sit an, iudico invenire expetenda ei sea, atqui fierent sed ut.</p>
        </div>
        
      </div>
    </div>

    <!-- Process -->
    <div style="margin-top:50px;padding-top: 50px;padding-bottom:50px;background: #e8e8e8">
      <!-- How it Works start -->
      @include('partials.how_it_works')
      <!-- How it Works Ends -->
    </div>
    <div class="textrow">
      <div class="col-md-6 col-md-offset-3">
        <a href="{{ url('/register?type=hp') }}" class="btn btn-primary btn-block">Get Started</a>
      </div>
    </div>
    </div> 
  </div>
  @endsection
