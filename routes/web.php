<?php

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

Route::get('/','PagesController@pages' );

//Route::get( '/test', 'TestController@loginc');

Route::resource('posts','PostController' );

Route::post('comments/{post_id}', ['uses'=>'CommentsController@store', 'as' => 'comments.store']);

/*
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get( '/test', 'TestController@loginc');

Route::get('/blah', function () { //get is just to get the information
    return 'lol';
});

Route::post( 'silly', '\App\Http\Controller\Auth\LoginController@postLogin');

Route::get('user', function(){
   return \App\User::with('flag')->get();
});
Route::get('user/{user_id}', function($user_id){
});

Route::

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
