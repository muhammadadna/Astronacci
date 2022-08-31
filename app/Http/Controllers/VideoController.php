<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index(){

        // $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();
        $role = Auth::user()->role;

        return view('video',[
        "title" => "Video",
        "active" => 'video',
        // "posts" => Post::all()
        "role" => $role
        ]);
    }
}
