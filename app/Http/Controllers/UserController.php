<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        $user->teams()->sync([2,3]);
        return $user->teams;

        return view('user', [
            'name' => 'Rogério',
            'lastName' => 'Dornelas',
            'user' => $user,
        ]);
    }
}
