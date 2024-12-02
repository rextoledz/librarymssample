@extends('layouts.admin')


@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Roles</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Roles</a>
</div>

<!-- Content Row -->
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>URL</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@if(isset($roles))
					@foreach($roles as $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->url }}</td>
							<td></td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection