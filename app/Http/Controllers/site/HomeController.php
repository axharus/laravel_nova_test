<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Flat;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $items =  Flat::all();
        return view('welcome',compact('items'));
    }
}
