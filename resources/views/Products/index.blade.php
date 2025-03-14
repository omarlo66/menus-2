<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    <div class="container bg-dark text-light">
        <h1 class="text-center text-4xl font-bold mt-10">Welcome to our website</h1>
        <p class="text-center text-lg mt-5">This is a simple website built using Laravel and Tailwind CSS.</p>
        <div class="flex justify-center mt-10">
            <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Product</a>
        </div>
        @foreach ($products as $product)
        <div class="card">
            <img src="products.view({{$product->id}})" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">
                {{$product->name}}
                <span class="badge bg-primary">$ {{$product->price}}</span>
            </h5>
            <p class="card-text mb-3">
                {{$product->description}}
            </p>
            </div>
        </div>
        @endforeach
    </div>
@endsection