@extends('layouts.app')

@section('title', 'الصفحة الرئيسية')

@section('content')
    <!-- Hero Slider -->
    <div class="swiper my-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://via.placeholder.com/1200x400" alt="Slide 1" class="w-full h-96 object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="text-center text-white">
                        <h2 class="text-4xl font-bold">عرض خاص!</h2>
                        <p class="mt-4">خصم يصل إلى 50% على المنتجات المحددة.</p>
                        <a href="/offers" class="mt-8 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">تصفح العروض</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Featured Products -->
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">أحدث المنتجات</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Product Card 1 -->
            <div class="bg-white p-4 shadow rounded-lg">
                <img src="https://via.placeholder.com/300x200" alt="Product 1" class="w-full h-48 object-cover rounded-lg">
                <h3 class="text-xl font-bold mt-4">المنتج 1</h3>
                <p class="mt-2 text-gray-600">وصف المنتج هنا.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-lg font-bold">100 جنيه</span>
                    <a href="/product/1" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">عرض التفاصيل</a>
                </div>
            </div>
        </div>
    </div>
@endsection
