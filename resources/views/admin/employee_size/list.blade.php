@extends('admin.layouts.app')

@section('content')

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<p>
				<a href="{{ url('employee_size/create') }}" class="btn btn-primary">Add</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Employee Size</h3>
				</div>
				<div class="box-body">
					<table id="listview" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Title</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list as $row)
							<tr>
								<td>{{ $row->name }}</td>
								<td>
									<a href="{{ url('/employee_size/'.$row->id.'/edit') }}" class="btn btn-info">Edit</a>
									<form method="post" style="display: inline;" action="{{ url('/employee_size/'.$row->id) }}">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-danger">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</section>

	@endsection