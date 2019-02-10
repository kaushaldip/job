@extends('layouts.employee')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success"> 
            {{-- <div class="panel-heading"> 
                <h3 class="panel-title"> Resume</h3> 
            </div>  --}}
            <div class="panel-body"> 

                <div class="row">
                    <div class="col-md-12">
                        <h5>List of Resume</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead><tr><th class="invoice-id">ID #</th><th>Filename</th><th>Created At</th><th>Actions</th></tr></thead>
                                    <tbody>
                                    @if(count(auth()->user()->cvs) > 0)
                                    @forelse (auth()->user()->cvs as $cv)
                                        <tr>
                                            <td style="width: 50px;">{{ $cv->id }}</td>
                                            <td>{{ $cv->client_file }}</td>
                                            <td style="width: 200px;">{{ $cv->created_at->diffForHumans() }}</td>
                                            <td style="width: 200px;">
                                                <a href="{{ employee_url('/resume/delete/'.$cv->id) }}" class="btn btn-xs btn-danger">Delete</a>
                                                <a href="{{ employee_url('/resume/view/'.$cv->id) }}" class="btn btn-xs btn-primary">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr><td colspan="4" class="text-muted">No Resumes</td></tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div class="formpanel"> 
                                <!-- Personal Information -->
                                <h5>Add Resume</h5>
                                <p>Accepted file types: Microsoft Word (.doc or .docx), Adobe PDF (.pdf) or text file (.txt or .rtf).2MB file size limit.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form class="box" method="post" action="{{ employee_url('/resume') }}" enctype="multipart/form-data">
                                            <div class="formrow{{ $errors->has('file') ? ' has-error' : '' }}">
                                                <label>&nbsp;</label>
                                                {!! Form::file('file', null) !!} <br/> <button type="submit">Upload</button>
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('file') }}</strong>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                <br>
                                {{-- <input type="submit" class="btn" value="Update and Save"> --}}
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5>List of Document</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead><tr><th class="invoice-id">ID #</th><th>Filename</th><th>Created At</th><th>Actions</th></tr></thead>
                                    <tbody>
                                    @if(count(auth()->user()->documents) > 0)
                                    @forelse (auth()->user()->documents as $document)
                                        <tr>
                                            <td style="width: 50px;">{{ $document->id }}</td>
                                            <td>{{ $document->client_file }}</td>
                                            <td style="width: 200px;">{{ $document->created_at->diffForHumans() }}</td>
                                            <td style="width: 200px;">
                                                <a href="{{ employee_url('/document/delete/'.$document->id) }}" class="btn btn-xs btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr><td colspan="4" class="text-muted">No Documents</td></tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div class="formpanel"> 
                                <!-- Personal Information -->
                                <h5>Add Document</h5>
                                <p>Accepted file types: Microsoft Word (.doc or .docx), Adobe PDF (.pdf) or text file (.txt or .rtf).2MB file size limit.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form class="box" method="post" action="{{ employee_url('/document') }}" enctype="multipart/form-data">
                                            <div class="formrow{{ $errors->has('file') ? ' has-error' : '' }}">
                                                <label>&nbsp;</label>
                                                {!! Form::file('file', null) !!} <br/> <button type="submit">Upload</button>
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('file') }}</strong>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                <br>
                                {{-- <input type="submit" class="btn" value="Update and Save"> --}}
                            </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
