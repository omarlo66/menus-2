<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="w-96 flex flex-col gap-4 bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-gray-900 font-bold text-xl text-center">Product Details</h2>

        <!-- صورة المنتج -->
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-40 object-cover rounded-lg">
        @else
            <div class="w-full h-40 bg-gray-300 flex items-center justify-center rounded-lg">
                <span class="text-gray-600">No Image Available</span>
            </div>
        @endif

        <!-- اسم المنتج -->
        <div class="flex flex-col gap-1">
            <span class="text-gray-700 font-semibold">Product Name:</span>
            <p class="text-gray-900">{{ $product->product_name }}</p>
        </div>

        <!-- السعر -->
        <div class="flex flex-col gap-1">
            <span class="text-gray-700 font-semibold">Price:</span>
            <p class="text-gray-900">${{ number_format($product->price, 2) }}</p>
        </div>

        <!-- الخصم -->
        <div class="flex flex-col gap-1">
            <span class="text-gray-700 font-semibold">Discount:</span>
            <p class="text-gray-900">{{ $product->discount ? $product->discount . '%' : 'No Discount' }}</p>
        </div>

        <!-- الفئة -->
        <div class="flex flex-col gap-1">
            <span class="text-gray-700 font-semibold">Category:</span>
            <p class="text-gray-900">{{ $product->category->name }}</p>
        </div>

        <!-- زر العودة -->
        <a href="{{ route('products.index') }}" class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition text-center">
            Back to Products
        </a>
    </div>
</body>
</html>
