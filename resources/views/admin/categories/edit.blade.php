@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Category</h1>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Dashboard</a></li>
                
                <li class="breadcrumb-item active">Edit Category</li>
                </ul>
            </div>
        </div>
    </div>
</div>




<section class="content">
    <div class="container-fluid">
        <form method="post" action="{{ route('update_category', $category->id) }}">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table class="table table-bordered table-striped">
            <tr><td>Title</td><td><input type="text" name="title" value="{{ $category->title }}"></td></tr>
            <tr><td>Slug</td><td><input type="text" name="slug" value="{{ $category->slug }}"></td></tr>
            <tr><td></td><td><input type="submit" value="Submit"></td></tr>
        </table>
        </form>
        
    </div>
</section>
@endsection