<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerDemo extends Controller
{
    //
    public function Demo()
    {         	$title="this is my firs title ";
 return view('userDemo',compact('title'));
    }
}
