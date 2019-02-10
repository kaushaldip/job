@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            {{-- <div class="panel-heading"> 
                <h3 class="panel-title"> Jobs</h3> 
            </div>  --}}
            <div class="panel-body">
            <p><a href="{{ hospital_url('/post') }}" class="btn btn-info"">Post a New Job</a></p>
            @if(count(auth()->user()->jobs()->get()) > 0)
            <h5>Active</h5>
            <div class="invoice-table table-responsive">
                <table class="table">
                <thead><tr><th class="invoice-id">ID #</th><th>Job</th><th>Created At</th><th>Expires At</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse (auth()->user()->jobs()->active()->get() as $job)
                        <tr>
                            <td style="width: 50px;">{{ $job->id }}</td>
                            <td>{{ $job->title }}</td>
                            <td style="width: 200px;">{{ $job->created_at->diffForHumans() }}</td>
                            <td style="width: 200px;">{{ $job->expires_at }}</td>
                            <td style="width: 200px;">
                                <a href="{{ hospital_url('/job/'.$job->id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                <a href="{{ hospital_url('/job/'.$job->id.'/view') }}" class="btn btn-xs btn-primary">Applicants <span class="badge">{{ count($job->applicant) }}</span></a>
                                {{-- <a href="{{ hospital_)url('/job/'.$job->id.'/deactive') }}" class="btn btn-warning">Deactive</a> --}}
                                <a href="{{ hospital_url('/job/'.$job->id.'/delete') }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <h5>Inactive</h5>
            <div class="invoice-table table-responsive">
                <table class="table">
                <thead><tr><th class="invoice-id">ID #</th><th>Job</th><th>Created At</th><th>Expired At</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse (auth()->user()->jobs()->inActive()->get() as $job)
                        <tr>
                            <td style="width: 50px;">{{ $job->id }}</td>
                            <td>{{ $job->position }}</td>
                            <td style="width: 200px;">{{ $job->created_at->diffForHumans() }}</td>
                            <td style="width: 200px;">{{ $job->expires_at }}</td>
                            <td style="width: 200px;">
                                <a href="{{ hospital_url('/job/'.$job->id.'/active') }}" class="btn btn-xs btn-success">Activate</a>
                                <a href="{{ hospital_url('/job/'.$job->id.'/delete') }}" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @else
            <div class="text-center">
                <h3> 
                    This is where all of your jobs and candidates will be.
                </h3>
                <h3>
                    <a href="{{ hospital_url('/post') }}">Post a new job</a> to get started.
                </h3>
            </div>
            @endif 
            </div> 
        </div>
    </div>
</div>
@endsection
