@extends('layouts.master')
@section('title', 'Create a new product')
@section('main')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: 160%">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Create a new product</h1>
                </div>
                <div class="table-responsive">
                    <form method="post" action="{{ route('products.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Product Name</label>
                            <input type="text" name="name" value="{{ old('name', '') }}"
                                   class="form-control @error('name') is-invalid @enderror" id="nameInput">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="desInput" class="form-label">Description</label>
                            <textarea type="text" name="description" value="{{ old('description', '') }}"
                                      class="form-control @error('description') is-invalid @enderror" id="desInput">
                            </textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="categorySelect" class="form-label">Product Category</label>
                            <select name="product_category_id" class="form-control @error('product_category_id') is-invalid @enderror"
                                    id="product_category_id">
                                <option value="">-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                            @error('product_category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="priceInput" class="form-label">Price</label>
                            <input type="text" name="price" value="{{ old('price', '') }}"
                                   class="form-control @error('price') is-invalid @enderror" id="priceInput">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="priceInput" class="form-label">Stock</label>
                            <input type="text" name="stock" value="{{ old('stock', '') }}"
                                   class="form-control @error('stock') is-invalid @enderror" id="priceInput">
                            @error('stock')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stockDefectiveInput" class="form-label">Stock Defective</label>
                            <input type="text" name="stock_defective" value="{{ old('stock_defective', '') }}"
                                   class="form-control @error('stock_defective') is-invalid @enderror" id="stockDefectiveInput">
                            @error('stock_defective')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="formFile" class="form-label">Image 1</label>
                                <input class="form-control" name="image1" type="file" id="formFile">
                            </div>
                            <div class="col">
                                <label for="formFile" class="form-label">Image 2</label>
                                <input class="form-control" name="image2" type="file" id="formFile">
                            </div>
                            <div class="col">
                                <label for="formFile" class="form-label">Image 3</label>
                                <input class="form-control" name="image3" type="file" id="formFile">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@stop
