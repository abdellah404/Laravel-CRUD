<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myctrl extends Controller
{
    public function hello(Request $resquest) {
        $id = $resquest->id;
        return view('welcome', ['id' => $id]);
        
}

   
}
