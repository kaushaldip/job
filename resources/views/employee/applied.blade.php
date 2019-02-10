@extends('layouts.employee')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                {{-- <div class="panel-heading">
                    <h3 class="panel-title"> Jobs</h3>
                </div> --}}
                <div class="panel-body" style="padding-top: 35px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Applied Jobs</h5>
                            <div class="invoice-table table-responsive">
                                <table class="table">
                                    <thead><tr><th class="invoice-id">ID #</th><th>Job</th><th>Applied Date</th><th>Status</th><th>Actions</th></tr></thead>
                                    <tbody>
                                    @if(count(auth()->user()->applies) > 0)
                                    @forelse (auth()->user()->applies as $apply)
                                        <tr>
                                            <td style="width: 50px;">{{ $apply->job->id }}</td>
                                            <td>{{ $apply->job->title }}</td>
                                            <td style="width: 200px;">{{ $apply->job->created_at->diffForHumans() }}</td>
                                            <td style="width: 200px;">{{ $apply->status->name }}</td>
                                            <td style="width: 200px;">
                                                <a href="{{ url('/job/'.$apply->job->id) }}" class="btn btn-xs btn-info">View</a>
                                                <a href="{{ employee_url('/message/job/'.$apply->id.'/user/'.$apply->job->user->id) }}" class="btn btn-xs btn-primary">message</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr><td colspan="4" class="text-muted">No jobs</td></tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            {{-- <h5>Expired</h5>
                            <div class="invoice-table table-responsive">
                                <table class="table">
                                    <thead><tr><th class="invoice-id">ID #</th><th>Job</th><th>Created At</th><th>Expires At</th><th>Actions</th></tr></thead>
                                    <tbody>
                                    <tr><td colspan="4" class="text-muted">No jobs</td></tr>
                                    </tbody>
                                </table>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
