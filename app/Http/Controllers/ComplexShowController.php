<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Complex;
use Illuminate\Http\Request;

class ComplexShowController extends Controller
{
    public function single(Request $request)
    {
        $item = Complex::where('slug',$request->route()->parametersWithoutNulls()['slug'])->first();


        return view('complex.show',compact('item'));
    }
}
