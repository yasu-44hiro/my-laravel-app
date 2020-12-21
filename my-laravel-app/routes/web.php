<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'owner_auth'], function () {

    Route::get('/owner', 'TodoController@find');

});

Route::get('/', function () {
    return view('top');
});

Auth::routes();

//Route::get('/home', 'TodoController@index');
Route::get('/home', 'TodoController@find');
Route::post('/todo/index', 'TodoController@search');

Route::resource('rest', 'RestappController');
Route::get('/todo/create', 'TodoController@create');
Route::get('/todo/delete', 'TodoController@delete');
