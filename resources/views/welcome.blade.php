@extends('layouts.app')
@section('content')
<!-- Search start -->
@include('partials.search')
<!-- Search End --> 
<!-- How it Works start -->
@include('partials.how_it_works')
<!-- How it Works Ends --> 
<!-- Top Employers start -->
{{-- @include('partials.top_employers') --}}
<!-- Top Employers ends --> 
<!-- Popular Searches start -->
{{-- @include('partials.popular') --}}
<!-- Popular Searches ends --> 
<!-- Featured Jobs start -->
@include('partials.latest')
{{-- @include('partials.feature_jobs') --}}
<!-- Featured Jobs ends --> 
<!-- Video start -->
@include('partials.video')
<!-- Video end --> 
<!-- Latest Jobs start -->
<!-- Latest Jobs ends --> 
<!-- Testimonials start -->
@include('partials.testimonial')
<!-- Testimonials End --> 
<!-- App Start -->
{{-- @include('partials.app_start') --}}
<!-- App End --> 
@endsection
