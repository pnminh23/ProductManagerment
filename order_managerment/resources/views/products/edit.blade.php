@extends('layout.app')
@section('title','Cập nhật khu vực')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8 mt-3">
                <div class="card-header">
                    <h2>Chỉnh sửa khu vực</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">ID:</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{$product->id}}" disabled readonly  >
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" required >
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount:</label>
                            <input type="number" name="amount" id="amount" class="form-control" value="{{$product->amount}}" required >
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" name="price" id="price" class="form-control" value="{{$product->price}}" required >
                        </div>
                        
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection