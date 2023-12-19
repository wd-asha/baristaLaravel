<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('blog', compact('posts'));
    }

}
