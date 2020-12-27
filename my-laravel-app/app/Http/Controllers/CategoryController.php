<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function search(Request $request)
    {
        $item = Category::find($request->id);
        dd($item);
        return view('rest.index', ['item' => $item]);
    }
}
