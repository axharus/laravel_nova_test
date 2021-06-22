<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Flat;

class FlatShowController extends Controller
{

    public function single(Request $request)
    {
        $item = Flat::where('slug',$request->route()->parametersWithoutNulls()['slug'])->first();
        return view('flat.show',compact('item'));
    }
}
