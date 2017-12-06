<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index() 
    {
        $posts = Post::latest()->get();  // equivalent to orderBy('created_at', 'desc')
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        $comments = $post->comments;
        return view('blog.show', compact('post', 'comments'));
    }
}
