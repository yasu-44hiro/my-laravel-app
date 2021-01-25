<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\Todo;
use App\Category;
use App\Post;
use App\Like;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
        $items = Category::all();
        $post = Post::all();

        return view('todo.index', ['items' => $items , 'post' => $post]);
        } else {
            return redirect('/');
        }
    }
    public function search(Request $request)
    {
        $params = Category::find($request->id);
        $items = Category::all();
        return view('todo.index', ['params' => $params , 'items' => $items]);
    }

    public function rest(Request $request)
    {
        $items = Category::all();
        return view('todo.create' , ['items' => $items]);
    }

    public function store(Request $request, $id)
    {
        Auth::user()->favorite($id);
        return back();
    }

    public function destroy($id)
    {
        Auth::user()->unfavorite($id);
        return back();
    }
    public function detail(Request $request)
    {
        $item = post::find($request->id);
        return view('todo.detail', ['item' => $item]);
    }
}
