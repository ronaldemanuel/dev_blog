<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
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

}
