<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        
        if(\Auth::user()->id ===$task->user_id)
        
        return view('users.index', [
            'users' => $users,
        ]);
        
       else{
            return view('welcome');}
    }
    public function show($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'tasks' => $tasks,
        ];

        $data += $this->counts($user);
        if(\Auth::user()->id ===$task->user_id)
        return view('users.show', $data);
        else{
            return view('welcome');}
    }
}