@extends('layout.app')
@section('title','Add')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8 mt-3">
                <div class="card-header">
                    <h2>Add product</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required >
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount:</label>
                            <input type="number" name="amount" id="amount" class="form-control" required >
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" name="price" id="price" class="form-control" required >
                        </div>
                        
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection