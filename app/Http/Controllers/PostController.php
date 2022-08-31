<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        // $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();
        $role = Auth::user()->role;
        if($role == 'regular'){
            $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        } elseif ($role == 'premium') {
            $posts = Post::orderBy('created_at', 'desc')->limit(10)->get();
        } else {
            $posts = Post::orderBy('created_at', 'desc')->get();
        }

        return view('posts',[
        "title" => "All Posts" . $title,
        "active" => 'posts',
        // "posts" => Post::all()
        "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
