<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //     ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            'categories' => Category::all(),
            "posts" => Post::latest()->Filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString(),
            "postsCarousel" => Post::latest()->Filter(request(['search', 'category', 'author']))
            ->paginate(3)->withQueryString()
            // "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "post",
            // "posts" => Post::find($slug)
            'categories' => Category::all(),
            "post" => $post
        ]);
    }
}
