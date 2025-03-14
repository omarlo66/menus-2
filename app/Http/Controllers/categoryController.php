<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Category.index', compact('categories'));
    }

    public function create()
    {
        return view('Category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255|unique:categories,name'
        ]);

        Category::create([
            'name' => $request->category_name
        ]);

        return redirect()->route('Category')->with('success', );
    }

    public function edit(Category $category) // Route Model Binding
    {
        return view('Category.edit', compact('category'));
    }

    public function show(Category $category) // Route Model Binding
    {
        return view('Category.show', compact('category'));
    }

    public function update(Request $request, Category $category) // Route Model Binding
    {
        $request->validate([
            'category_name' => 'required|string|max:255|unique:categories,name,' . $category->id
        ]);

        $category->update([
            'name' => $request->category_name
        ]);

        return redirect()->route('Category.index')->with('success');
    }

    public function destroy(Category $category) // Route Model Binding
    {
        $category->delete();

        return redirect()->route('Category.index')->with('success');
    }
}
