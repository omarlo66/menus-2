@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
   <div class="container">
            <!-- فورم إضافة فئة جديدة --><div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Add New Category
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <form action="/categories/add" method="POST" class="w-96 flex flex-col gap-4 bg-white p-6 rounded-lg shadow-lg">
                    @csrf
                <div class="flex flex-col gap-2">
                    <label for="category_name" class="text-gray-800 font-semibold">Category Name</label>
                    <input type="text" name="category_name" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" placeholder="Enter category name..." required>
                </div>
                <button type="submit" class="text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition btn-primary btn">Add Category</button>
            </form>
        </div>
        </div>
    </div>
                

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
   </div>
@endsection