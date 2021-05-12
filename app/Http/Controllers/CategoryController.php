<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->name;
        $category->group = $request->group;
        $category->author = $request->author;
        $category->description = $request->description;

        $category->save();

        return redirect('/categorias/exibir');
    }

    public function show($id) 
    {
        $category = Category::findOrFail($id);
        $posts = Post::all();

        return view('categories.show', ['posts' => $posts], ['category' => $category]);
    }

}
