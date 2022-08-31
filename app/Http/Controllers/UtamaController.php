<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index(){

        return view('utama.index', [
            'title' => 'Utama',
            'active' => 'home'
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
