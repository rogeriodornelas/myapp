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
//        $user->posts()->create([
//            'title' => 'Titulo 1',
//            'cover' => 'Cover 1',
//            'content' => 'Conteúdo 1',
//            'tags' => 'Tags 1'
//        ]);

        dd($user->posts);

        return view('user', [
            'name' => 'Rogério',
            'lastName' => 'Dornelas',
            'user' => $user,
        ]);
    }
}
