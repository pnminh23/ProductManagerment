@extends('layout.app')
@section('title','Product')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-10">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <h3 class="text-primary col-5">Product Managerment</h3>
                        <a href="{{ route('products.create') }}" class="btn btn-success col-1">Add</a>
                    </div>
                    <div class="row">
                        @if (Session::has('success'))
                            <div class="alert alert-success mt-3">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger mt-3">
                                {{Session::get('error')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                           
                            <th scope="col">ID </th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount </th>
                            <th scope="col">Price(VND) </th>
                            <th scope="col">Thao tác</th>
                        
                        </thead>
                        <tbody >
                            @foreach ($products as $product)
                                <tr >
                                    <th scope="row">{{$product->id}}</th>
                                    <td class="col-2">{{$product->name}}</td>
                                    <td>{{$product->amount}}</td>
                                    <td>{{number_format($product->price, 0, '.', ',')}}</td>
                                    

                                    <td class="">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark col-2 m-2"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary col-2 m-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-danger col-2 m-2" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$product->id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade" id="deleteModal-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xoá</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                 Bạn có chắc chắn muốn xoá {{$product->name}}?
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                                  <form action="{{ route('products.destroy', $product->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xoá</button>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        {{ $products->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection