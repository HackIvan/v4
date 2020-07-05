@extends('layouts.app')

@section('content')
    <div class="container text-center">
         <h1> Products</h1>

         <div class="row">

        @foreach ($allProducts as $product)
            <div class="card col-3">
                <img class="card-img-top" src="{{ asset('default-product.jpg') }}" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{ $product->name }}</h4>
                <h4 class="card-title">Le {{ $product->price }}</h4>
                    {{-- <p class="card-text">{{ $product->description }}</p> --}}
                </div>
                <div class="card-body">
                <a href="{{ route('cart.add', $product->id)}}" class="card-link">Add to cart</a>

                </div>
            </div>
        @endforeach

    </div>
    </div>

@endsection
