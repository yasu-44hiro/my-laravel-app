<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todo.index');
    }

    public function new(){
        $data = ['msg'=>'お名前を入力して下さい' , ];
        return view('todo.new' , $data);
    }

    public function post(Request $request){
        $msg = $request->title;
        $data = ['msg'=>'こんにちは' . $msg . 'さん' ,];
        return view('todo.new' , $data);
    }
}
