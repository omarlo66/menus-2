<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    <div class="container bg-dark text-light">
        <h1 class="text-center text-4xl font-bold mt-10">Welcome to our website</h1>
        <p class="text-center text-lg mt-5">This is a simple website built using Laravel and Tailwind CSS.</p>
        <div class="flex justify-center mt-10">
            <a href="{{ route('products.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Products</a>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Category</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" width="100"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection