<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com'
            ],
            [
                'id' => 2,
                'name' => 'Bob Smith',
                'email' => 'bob@example.com'
            ],
            [
                'id' => 3,
                'name' => 'Charlie Brown',
                'email' => 'charlie@example.com'
            ],
            [
                'id' => 4,
                'name' => 'Diana Prince',
                'email' => 'diana@example.com'
            ],
            [
                'id' => 5,
                'name' => 'Ethan Hunt',
                'email' => 'ethan@example.com'
            ]
        ];

        return view('home', compact('users'));
    }
}
