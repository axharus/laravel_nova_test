<?php
namespace App\Http\Controllers\site;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Scope;
use App\Models\Flat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlatIndexController extends Controller
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
            'built' => $request->built,
            'layout' => $request->layouts,
            'price' => $request->price,

        ];

        if ($inputs['built'] != null) {
            $query = Flat::query();

            foreach ($inputs as $key => $item) {
                $query = $query->$key($item);
            }

            $product = $query->orderBy('id', 'desc')->paginate(5);
        } else
            $product = Flat::orderBy('id', 'desc')->paginate(5);

        return view('flat.index', [
            'paginator' => $product
        ]);

    }
}
