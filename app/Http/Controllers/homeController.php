<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $users = Profile::all();

        return view('home', compact('users'));
    }
}
