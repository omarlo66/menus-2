<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">

    <!-- فورم إضافة فئة جديدة -->
    <form action="/categories/store" method="POST" class="w-96 flex flex-col gap-4 bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="category_name" class="text-gray-800 font-semibold">Category Name</label>
            <input type="text" name="category_name" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" placeholder="Enter category name..." required>
        </div>

        <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">Add Category</button>
    </form>

    <!-- عرض جميع الفئات -->
    <div class="w-96 bg-white p-6 rounded-lg shadow-lg mt-6">
        <h2 class="text-gray-800 font-bold text-lg mb-4">Categories List</h2>
        <ul class="space-y-2">
           @foreach($categories as $Category)
                <li class="flex justify-between items-center bg-gray-100 p-2 rounded-lg">
                    <span>{{ $Category->name }}</span>
                    <a href="/categories/edit/{{ $Category->id }}" class="text-blue-600 hover:underline">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
