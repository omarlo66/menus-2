@extends('layouts.app')

@section('title', $restaurant_name)

@section('content')

<div class="container">
    <div class="hero-section w-100 d-flex">
        <div class="hero-content">
            <h1 class="text-light">Welcome to {{ $restaurant_name }}</h1>
            <p class="text-light">We serve the best food in town</p>
        </div>
        <img src="{{$hero}}" alt="{{$restaurant_name}}" class="hero-image img-fluid">
    </div>
    
    <h2 class="text-light mt-5">Our Products</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->product_name }}">
                    <div class="card-body">
                        <h5 class="card-title
                        ">{{ $product->product_name }}</h5>
                        <p class="card-text">{{ $product->price }}$</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection