<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view(
            'profile.profiles' ,
        compact('profiles'));
    }


    public function details(Request $request){

        $profile = Profile::findOrFail($request->id);
        return view('profile.details',compact('profile'));
    }
}
