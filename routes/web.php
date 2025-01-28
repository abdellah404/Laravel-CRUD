<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 

Route::get('/{id}',[myctrl::class,'hello']);

// Route::get('/' , function(Request $request) {

//     return view('welcome' , [
        
//         'name' => 'John Doe' , 
//         'age' => 25,
//         'cours' => ['Laravel' , 'PHP' , 'Python'],

// ]);

// });
