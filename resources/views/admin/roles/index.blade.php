@extends('layouts.admin')


@section('content')
	<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Roles</h1>
    <a href="" class="btn btn-primary">Add Role</a>
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
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->url}}</td>
                        <td>
                            <a href=""><span data-toggle="tooltip" data-placement="top" title="Edit" class="fa fa-pen"></span></a>
                            <a href=""><span data-toggle="tooltip" data-placement="top" title="Delete" class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    
</div>
@endsection