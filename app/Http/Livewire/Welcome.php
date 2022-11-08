<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Welcome extends Component
{

    public function render()
    {
        return view('livewire.welcome', [
            'posts' => Post::all(),
        ]);
    }

}
