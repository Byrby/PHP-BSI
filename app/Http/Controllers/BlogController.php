<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //récupération des billets de blog
        $posts = Post::all();
        return view('welcome', [
            "postsList" => $posts
        ]);
    }
}
