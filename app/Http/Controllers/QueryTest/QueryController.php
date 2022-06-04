<?php

namespace App\Http\Controllers\QueryTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function index()
    {
        // $results = DB::table('products')->select('title','stock as inventory_item')->get();
        
        $results = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.*', 'products.*')
            ->get();

        // $results = DB::table('categories')->leftJoin('products', 'categories.id', '=', 'products.category_id')
            // ->get();
 

        dd($results);
    }
}
