<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function test()
    {
        $name = ["anselman", "test", "test2", "test3", "test5"];

        return view('test', compact("name"));
    }
}
