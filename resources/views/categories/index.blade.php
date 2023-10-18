@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end">
        <a  href="{{ route('category.create') }}" class="btn btn-success float-end btn-sm">Add Categories</a>
    </div>

    <div class="card card-deafult my-2">
        <div class="card-header">Create Category</div>

    </div>

@endsection
