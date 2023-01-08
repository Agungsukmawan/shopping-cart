@extends('layout.main')

@section('content')
    <h1 class="mt-3">Welcome To Our Page</h1>
    <hr/>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('images/'.$product->photo)}}" width="300" alt="{{$product->product_name}}">
                    <p>{{$product->product_detail}}</p>
                    <h5>Rp {{$product->price}}</h5>
                    <a href="/cart/{{$product->id}}/add" class="btn btn-primary">Add To Cart</a>
                </div>
            </div>
        </div>  
        @endforeach
    </div>
@endsection