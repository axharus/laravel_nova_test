<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogShowController extends Controller
{
    public function show($id)
    {
        $rest = DB::table('posts')->orderByDesc('id')->limit(3)->get();


        $item = Post::findorFail($id);
        return view('blog.show',compact('item','rest'));
    }
}
