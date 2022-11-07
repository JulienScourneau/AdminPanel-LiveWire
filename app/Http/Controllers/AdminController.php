<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {

        return view('components.dashboard', [
            'users' => User::all(),
            'posts' => Post::all(),
        ]);
    }
}
