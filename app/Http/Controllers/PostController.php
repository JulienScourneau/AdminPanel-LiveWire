<?php

namespace App\Http\Controllers;

use App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        if (request()->is('/')) {
            return view('components.welcome', [
                'posts' => Post::all()
            ]);
        }

        return view('livewire.welcome', [
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Post::create(request()->validate([
            'title' => ['required'],
            'subtitle' => ['required'],
            'body' => ['required'],
        ]));

        return redirect('/');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
