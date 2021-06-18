<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $paginator = Post::orderBy('id','desc')->paginate(5);
        return view('post.index',compact('paginator'));
    }

    public function single(Request $request)
    {
//        dd($request->route()->parametersWithoutNulls());

        $rest = Post::orderByDesc('id')->limit(3)->get();
        $item = Post::where('slug',$request->route()->parametersWithoutNulls()['slug'])->first();
        return view('post.show',compact('item','rest'));
    }
}
