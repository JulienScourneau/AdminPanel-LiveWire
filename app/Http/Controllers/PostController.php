<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('components.welcome');
    }

    public function create()
    {
        return view('posts.create');
    }
}
