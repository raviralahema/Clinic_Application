@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Categories</h1>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Dashboard</a></li>
                
                <li class="breadcrumb-item active">Categories</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <p>
            <a href="{{ route('add_category') }}" class="btn btn-primary">Add New Category</a>
        </p>
        <form method="POST" action="{{url('/searchrecord')}}">
        {{ csrf_field() }}
		<input type="search" name="search_name">
		<input type="submit" value="Search">
           
			</form>
        <input type="hidden" name="_method" value="PUT">
		 @method('PUT')
        <table class="table table-bordered table-striped">
            <tr><th>ID</th><th>Title</th><th>slug</th><th>Action</th></tr>
			
            @foreach($categories as $c)
            <tr>
                <td>{{ $c->id }}</td><td>{{ $c->title }}</td><td>{{ $c->slug }}</td>
                <td><a href="{{ route('edit_category',$c->id) }}" class="btn btn-info">Edit</a></td>
				<td><a href="javascript:void(0);" onclick="$(this).parent().find('form').submit()" class="btn btn-info">Delete</a>
				<form action="{{ route('delete_category', $c->id) }}" method="post">
				{{ csrf_field() }}
				</form>
				</td>
            </tr>
            @endforeach
        </table>

    </div>
</section>
@endsection