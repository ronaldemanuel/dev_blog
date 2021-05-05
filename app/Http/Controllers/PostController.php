<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::all();

        return view('welcome', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->category = $request->category;
        $post->author = $request->author;
        $post->content = $request->content;

        // Content preview
        $preview = substr($request->content, 0, 700);

        $post->content_preview = $preview;

        $post->save();

        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }
}
