<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pizza;

class PageController extends Controller
{
    public function index(){
        $pizza= Pizza::all();

        return response()->json($pizza);


    }
}
