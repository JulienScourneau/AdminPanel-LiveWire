<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        User::create(request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7']
        ]));
        return back()->with('message', "User Successfully Added");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
