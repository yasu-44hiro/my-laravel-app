<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;


class RestappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all();
        return $items->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = User::all();
        return view('rest.create', ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $todo->user_id = $request->id;
        $todo->product_number = $request->product_number;
        $todo->level = $request->level;
        $todo->detail = $request->detail;
        $todo->status = $request->status;
        $todo->save();
        //$form = $request->all();
        //unset($form['_token']);
        //$todo->fill($form)->save();
        return redirect('/home');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Todo::find($id);
        return view('rest.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Todo::find($id);
        return view('rest.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, Todo::$rules);
        dd($request->id);
        $todo = Todo::find($request->id);
        $todo->user_id = $request->id;
        $todo->product_number = $request->product_number;
        $todo->level = $request->level;
        $todo->detail = $request->detail;
        $todo->status = $request->status;
        $todo->save();
        //$form = $request->all();
        //unset($form['_token']);
        //$todo->fill($form)->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Todo::find($id)->delete();
        return redirect('/home');

    }
}
