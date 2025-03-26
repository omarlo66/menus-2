@extends('layouts.app')

@section('title', 'صفحة المنتج')

@section('content')
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Images -->
            <div>
                <img src="https://via.placeholder.com/600x400" alt="Product Image" class="w-full rounded-lg">
            </div>

            <!-- Product Details -->
            <div>
                <h1 class="text-3xl font-bold">المنتج {{ $productId }}</h1>
                <p class="mt-4 text-gray-600">وصف المنتج هنا.</p>
                <div class="mt-6">
                    <span class="text-2xl font-bold">100 جنيه</span>
                    <button class="ml-4 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-shopping-cart"></i> أضف إلى السلة
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
