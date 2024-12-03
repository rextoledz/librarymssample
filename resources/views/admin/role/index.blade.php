@extends('layouts.admin')


@section('content')
	<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Role</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus-circle fa-sm text-white-50"></i>Add role</a>
</div>

<!-- Content Row -->
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Url</th>
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
                        <td>
                            <a href="" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fas fa-pen"></span></a>
                            <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><span style="color: red" class="fas fa-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection

