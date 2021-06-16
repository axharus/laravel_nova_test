<?php

namespace App\Http\Controllers;


use App\Models\Flat;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $item = Flat::all();
//        dd($item);

        return view('house.index');
    }


    public function show($id)
    {
        //
    }


}
