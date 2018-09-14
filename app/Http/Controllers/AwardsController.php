<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Award;

class AwardsController extends Controller
{
    public function index()
    {
        $awrds = Award::all();
        return view('ShowAwards',['awards'=>$awrds]);
    }
}
