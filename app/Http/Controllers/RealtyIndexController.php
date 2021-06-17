<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Realty;
use Illuminate\Http\Request;

class RealtyIndexController extends Controller
{
    public function index(Request $request)
    {
        $inputs = [
            //layout - scope. $request->layouts - текст з форми
            'built' => $request->built,
            'layout' => $request->layouts,
            'price' => $request->price,

        ];

        if ($inputs['built'] != null) {
            $query = Realty::query();

            foreach ($inputs as $key => $item) {
                $query = $query->$key($item);
            }

            $product = $query->orderBy('id', 'desc')->paginate(5);
        } else
            $product = Realty::orderBy('id', 'desc')->paginate(5);

        return view('realty.index', [
            'paginator' => $product
        ]);

    }
}
