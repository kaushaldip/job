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
							<a href="{{ employee_url('/home') }}"><i class="fa fa-search"></i><span>Search</span></a>
						</li>
						<li class="{{ Route::currentRouteName() == "message" ? 'tab-current' : '' }}">
							<a href="{{ employee_url('/message') }}"><i class="fa fa-envelope"></i><span>Messages</span></a>
						</li>
						<li class="{{ Route::currentRouteName() == "applied" ? 'tab-current' : '' }}">
							<a href="{{ employee_url('/applied') }}"><i class="fa fa-check"></i><span>Applied Jobs <span style="font-size: 10px !important;background: #fff;color: #000" class="badge">{{ count(auth()->user()->applies) }}</span></span></a>
						</li>
						{{-- <li class="{{ Route::currentRouteName() == "past" ? 'tab-current' : '' }}">
							<a href="{{ employee_url('/past') }}"><i class="fa fa-mail-reply"></i><span>Past Jobs</span></a>
						</li> --}}
						<li class="{{ Route::currentRouteName() == "profile" ? 'tab-current' : '' }}">
							<a href="{{ employee_url('/profile') }}"><i class="fa fa-user"></i><span>My Profile</span></a>
						</li>
						<li class="{{ Route::currentRouteName() == "cv" ? 'tab-current' : '' }}">
							<a href="{{ employee_url('/resume') }}"><i class="fa fa-file-text"></i><span>Resume</span></a>
						</li>
					{{-- <li class="{{ Route::currentRouteName() == "document" ? 'tab-current' : '' }}">
						<a href="{{ employee_url('/document') }}"><i class="fa fa-folder"></i><span>Document</span></a>
					</li> --}}
					{{-- <li class="{{ Route::currentRouteName() == "settings" ? 'tab-current' : '' }}">
						<a href="{{ employee_url('/settings') }}"><i class="fa fa-cogs"></i><span>Settings</span></a>
					</li> --}}
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
<script>
$(document).ready(function(){
	$(".uploader").dropzone({ url: "{{ employee_url('/cv') }}" });
});
</script>
@endsection
