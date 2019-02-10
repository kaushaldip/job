@extends('admin.layouts.app')

@section('content')

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Hospital</h3>
				</div>
				<div class="box-body">
					@if(isset($hospital))
					<form class="form-horizontal" method="post" action="{{ url('hospital/'.$hospital->id) }}">
					<input type="hidden" name="_method" value="PUT">
					@else
					<form class="form-horizontal" method="post" action="{{ url('hospital') }}">
					@endif
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="name" value="{{ $hospital->name or old('name') }}" placeholder="Name">
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('confirmed') ? ' has-error' : '' }}">
							<label class="col-sm-2 control-label">Confirmed</label>
							<div class="col-sm-10">
								<input type="radio" value="1" @if($hospital->confirmed == 1) checked @endif name="confirmed" /> Yes
								<input type="radio" value="0" @if($hospital->confirmed == 0) checked @endif name="confirmed" /> No
								@if ($errors->has('confirmed'))
								<span class="help-block">
									<strong>{{ $errors->first('confirmed') }}</strong>
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