@extends('admin.layouts.app')

@section('content')

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Create new</h3>
				</div>
				<div class="box-body">
					@if(isset($employee_size))
					<form class="form-horizontal" method="post" action="{{ url('employee_size/'.$employee_size->id) }}">
					<input type="hidden" name="_method" value="PUT">
					@else
					<form class="form-horizontal" method="post" action="{{ url('employee_size') }}">
					@endif
						{{ csrf_field() }}
						<div class="box-body">
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<label class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" value="{{ $employee_size->name or old('name') }}" placeholder="Name">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-info pull-right">Submit</button>
						</div>
						<!-- /.box-footer -->
					</form>
					
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>

@endsection