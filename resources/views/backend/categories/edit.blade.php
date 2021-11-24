@extends('layouts.master')
@section('title', 'Edit: ' . $category->name)
@section('main')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: 160%">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit: {{ $category->name }}</h1>
                </div>
                <div class="table-responsive">
                    <form method="post" action="{{ route('categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Category Name</label>
                            <input type="text" name="name" value="{{ old('name', $category->name) }}"
                                   class="form-control @error('name') is-invalid @enderror" id="nameInput">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
