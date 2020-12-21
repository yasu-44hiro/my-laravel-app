<?php

namespace App\Http\Controllers;

use App\User;
use App\Todo;

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
        $item = User::find($request->id);
        return view('todo.index', ['item' => $item]);
    }

    public function create(Request $request)
    {
        $items = User::all();
        return view('todo.create', ['items' => $items]);
    }

    public function delete(Request $request)
    {
        $item = Todo::find($request->id);
        return view('todo.delete', ['item' => $item]);
    }

}
