@extends('layouts.master')

@section('content')
	<div class="row">
  		<div class="col-md-12">
  			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Department</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($departments as $department)
					    <tr>
							<td>{{ $department->id }}</td>
							<td>{{ $department->department }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</div>
	</div>
    
@stop
