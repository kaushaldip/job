@extends('layouts.hospital')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            {{-- <div class="panel-heading"> 
                <h3 class="panel-title">List of Candidates for {{ $job->title }}</h3> 
            </div>  --}}
            <div class="panel-body">
            @if(count($job->applicant) > 0)
            <h5>Applicants</h5>
            <div class="invoice-table table-responsive">
                <table class="table">
                <thead><tr><th class="invoice-id">ID #</th><th>Candidate</th><th>Applied Date</th><th>Resume</th><th>Document</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse ($job->applicant as $apply)
                        <tr>
                            <td style="width: 50px;">{{ $apply->id }}</td>
                            <td><a href="{{ hospital_url('/apply/applicant/'.$apply->id) }}">{{ $apply->user->name }}</a></td>
                            <td>{{ $apply->created_at->format('d/m/Y') }}</td>
                            @if($apply->CV)
                            <td><a href="{{ hospital_url('/download/resume/'.$apply->CV->id) }}">{{ $apply->CV->client_file }}</a></td>
                            @else
                            <td>No resume</td>
                            @endif
                            @if($apply->document)
                            <td><a href="{{ hospital_url('/download/document/'.$apply->document->id) }}">{{ $apply->document->client_file }}</a></td>
                            @else
                            <td>No document</td>
                            <td>{{ $apply->status->name }}</td>
                            @endif
                            <td style="width: 200px;">
                                <a href="{{ hospital_url('/message/job/'.$apply->job->id.'/user/'.$apply->user->id) }}" class="btn btn-xs btn-info">Message</a>
                                <a href="{{ hospital_url('/apply/accept/'.$apply->id) }}" class="btn btn-xs btn-success">Accept</a>
                                <a href="{{ hospital_url('/apply/decline/'.$apply->id) }}" class="btn btn-xs btn-danger">Decline</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @else
            <div class="text-center">
                <h3> 
                    No Candidates for this job <a href="{{ hospital_url('/job') }}" class="btn btn-danger">Back</a>
                </h3>
            </div>
            @endif 
            </div> 
        </div>
    </div>
</div>
@endsection
