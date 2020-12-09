<?php

namespace App\Http\Controllers;

use App\Todo;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index(Request $request)
     {
         $items = Todo::all();
         return view('home', ['items =>$items']);
     }

     public function find(Request $request)
    {
        return view('home', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Todo::where('product_number', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('home', $param);
    }

}
