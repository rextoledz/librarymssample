@extends('layouts.admin')


@section('content')
	<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Role</h1>

</div>

<!-- Content Row -->
<div class="col-sm-6">
    <form method="POST" action="{{ route('admin.role.store') }}">
        @csrf
        <div class="col-sm-12">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" name="name">
        </div>
        <div class="col-sm-12">
            <label for="url">Url</label>
            <input id="url" type="text" class="form-control" name="url">
        </div>
        <div class="col-sm-12 mt-3">
            <input type="submit" class="btn btn-success" name="Submit">
        </div>
    </form>
</div>
@endsection