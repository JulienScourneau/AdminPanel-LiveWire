<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostForm extends Component
{
    public $title;
    public $subtitle;
    public $body;

    protected $rules = [
        'title' => 'required|min:8',
        'subtitle' => ['required', 'min:8'],
        'body' => ['required'],
    ];

    public function submit()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('message', 'Post successfully Added.');
        $this->reset();
    }

    public function updated($name)
    {
        $this->validateOnly($name, [
            'title' => 'required|min:8',
            'subtitle' => 'required|min:8',
            'body' => 'required',
        ]);

    }

    public function render()
    {
        return view('livewire.post-form');
    }

}
