<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function find(Request $request)
    {
        $items = User::all();
        return view('/home', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $items = User::all();
        $todos = User::find($request->id)->todos;
        $user = $request->id;
        $param = ['input' => $request->input, 'items' => $items, 'todos' => $todos, 'user' => $user];
        return view('/home', $param);
    }

    public function create(Request $request)
    {
        $items = User::all();
        return view('todo.create', ['items' => $items]);
    }
}
