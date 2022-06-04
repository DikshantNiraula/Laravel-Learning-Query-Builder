<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
     return response()->json([
        'status_code' => 200,
         'data' => $users, 
            ],200 );
    }
}
