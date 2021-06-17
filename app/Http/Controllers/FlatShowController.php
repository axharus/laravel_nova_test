<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Flat;

class FlatShowController extends Controller
{

    public function show($id)
    {

        $item = Flat::findOrFail($id);


        return view('house.show',compact('item'));
    }
}
