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
        $name = User::where('name', $request->name)->first();
        $param = ['input' => $request->input, 'name' => $name, 'items' => $items];
        return view('/home', $param);
    }
}
