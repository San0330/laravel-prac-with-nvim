<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {

        // DB::listen(function ($query) {
        //     logger($query->sql);
        // });        

        return view("posts.index", [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }
}
