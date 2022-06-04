<?php

namespace App\Http\Controllers\QueryTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function index()
    {
        $results = DB::table('products')->select('title','stock as inventory_item')->get();
        dd($results[19]->inventory_item);
    }
}
