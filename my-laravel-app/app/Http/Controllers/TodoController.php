<?php

namespace App\Http\Controllers;

use App\User;
use App\Todo;
use App\Category;
use App\Post;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function search(Request $request)
    {
        $params = Category::find($request->id);
        $items = Category::all();
        return view('rest.index', ['params' => $params , 'items' => $items]);
    }

    public function rest(Request $request)
    {
        $items = Category::all();
        return view('todo.create' , ['items' => $items]);
    }

    public function delete(Request $request)
    {
        $item = Todo::find($request->id);
        return view('todo.delete', ['item' => $item]);
    }
    public function detail(Request $request)
    {
        $item = post::find($request->id);
        return view('todo.detail', ['item' => $item]);
    }
}
