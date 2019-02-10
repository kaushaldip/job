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
					@if(isset($category))
					<form class="form-horizontal" method="post" action="{{ url('category/'.$category->id) }}">
					<input type="hidden" name="_method" value="PUT">
					@else
					<form class="form-horizontal" method="post" action="{{ url('category') }}">
					@endif
						{{ csrf_field() }}
						<div class="box-body">
							<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
								<label class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" value="{{ $category->name or old('name') }}" placeholder="Name">
									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif
								</div>
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-2 control-label">Parent</label>
								<div class="col-sm-10">
									<select name="parent_id" class="form-control">
										<option value="0">Parent Category</option>
										@foreach($categories as $cat)
											<option @if(isset($category) && $category->parent_id==$cat->id) selected="selected" @endif value="{{ $cat->id }}">{{ $cat->name }}</option>
										@endforeach
									</select>
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