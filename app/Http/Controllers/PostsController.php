<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
  
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        Post::create(request(['title', 'body', 'intro', 'sub_heading', 'sub_body']));
        return redirect('/');   
    }

   
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    
    public function edit(Post $post)
    {
        //
    }

 
    public function update(Request $request, Post $post)
    {
        //
    }

    
    public function destroy(Post $post)
    {
        //
    }
}
