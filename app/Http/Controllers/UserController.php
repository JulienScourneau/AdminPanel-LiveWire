<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
