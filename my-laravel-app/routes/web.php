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
Route::post('/rest/index', 'TodoController@search');

Route::resource('rest', 'RestappController');
Route::get('/todo/create', 'TodoController@rest');
Route::get('/todo/detail', 'TodoController@detail');
Route::get('/todo/delete', 'TodoController@delete');
Route::get('/login/guest', 'Auth\LoginController@guestLogin');

Route::get('/reply/like/{id}', 'RepliesController@like')->name('reply.like');
Route::get('/reply/unlike/{id}', 'RepliesController@unlike')->name('reply.unlike');
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'posts/{id}'],function(){
       Route::post('favorite','TodoController@store')->name('favorites.favorite');
       Route::delete('unfavorite','TodoController@destroy')->name('favorites.unfavorite');
    });
});
