@extends('layout.app')
@section('title','Detail')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8">
                <div class="card-header">
                    <h2>Detail product</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <p><span class="fw-bold">ID: </span>{{$product->id}}</p>
                            <p><span class="fw-bold">Name: </span>{{$product->name}}</p>
                            <p><span class="fw-bold">Amount: </span>{{$product->amount}}</p>
                            <p><span class="fw-bold">Price: </span>{{$product->price}}</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection