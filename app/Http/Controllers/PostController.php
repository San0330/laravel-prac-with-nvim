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

        return view("posts", [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
