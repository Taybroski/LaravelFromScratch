<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{

    public function store(Post $post)
    {
        $this->validate(request(), [ 'body' => 'required|min:2' ]);
        $post->addComment(request('body'));
        // Comment::create(request(['body', 'post_id']));
        return back();
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
