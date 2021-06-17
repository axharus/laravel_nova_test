<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogIndexController extends Controller
{
    public function index()
    {
        $paginator = Post::orderBy('id','desc')->paginate(5);
        return view('blog.index',compact('paginator'));
    }
}
