<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $users ;
    public $posts;

    public function mount()
    {
        $this->users = User::all();
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
