<?php

namespace App\Http\Controllers;
use App\Filters\DateFilter;

use Illuminate\Database\Eloquent\Scope;


use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    $inputs = [
        //layout - scope. $request->layouts - текст з форми
        'built' =>$request->built,
        'layout' => $request->layouts,
        'price'=>$request->price,

    ];

if($inputs['built'] != null)
{
    $query= Flat::query();


    foreach ($inputs as $key => $item ){
        $query = $query->$key($item);
    }
    $product = $query->paginate(5);
}
else
$product = Flat::paginate(5);
            return view('house.index',[
                'paginator' => $product
            ]);

    }

    public function home()
    {
        $items =  Flat::all();

        return view('welcome',compact('items'));
    }


    public function show($id)
    {

        $item = Flat::findOrFail($id);


        return view('house.show',compact('item'));
    }

}
