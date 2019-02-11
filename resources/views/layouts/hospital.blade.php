@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="sub-menu">
		<div class="col-md-12">
			<div class="tabs tabs-style-tzoid">
				<nav>
					<ul>
						<li class="{{ Route::currentRouteName() == "home" ? 'tab-current' : '' }}">
							<a href="{{ hospital_url('/home') }}"><i class="fa fa-envelope"></i><span>Messages</span></a>
						</li>
						<li class="{{ Route::currentRouteName() == "job" ? 'tab-current' : '' }}">
							<a href="{{ hospital_url('/job') }}"><i class="fa fa-user-md"></i><span>Jobs</span></a>
						</li>
						<li class="{{ Route::currentRouteName() == "billing" ? 'tab-current' : '' }}">
							<a href="{{ hospital_url('/billing') }}"><i class="fa fa-calculator"></i><span>Billing</span></a>
						</li>
						<li class="{{ Route::currentRouteName() == "profile" ? 'tab-current' : '' }}">
							<a href="{{ hospital_url('/profile') }}"><i class="fa fa-user"></i><span>Profile</span></a>
						</li>
				</ul>
			</nav>
		</div>	
	</div>
	</div>
		<div class="container">
	<div class="col-md-12 dashboad-content">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active">
				@if(session()->has('msg'))
				<div class="alert alert-info alert-dismissible fade in" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					{{ session('msg') }}
				</div>
				@endif
				@yield('main-content')
			</div>
		</div>
	</div>
		</div>
</div>
</div>
@endsection
