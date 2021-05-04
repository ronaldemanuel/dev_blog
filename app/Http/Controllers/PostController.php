<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::all();

        return view('welcome', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
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
}
