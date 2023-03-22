<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragonController extends Controller
{
    public function displayform()
    {
        return view ('dragons'); 
    }
    public function save(Request $request)
    {
        $baby_dragon = $request->input('baby_dragon');

    }
}
