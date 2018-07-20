<?php

use App\Events\MessagePosted;

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



Route::get('/', 'PagesController@getHome');

Route::get('/tag/{id}', 'TagController@show');
Route::get('/user/{id}', 'UserController@show');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/post', 'PostController@index');

Route::resource('/post', 'PostController');

// Route::get('auth/login', 'Auth\LoginController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Auth::routes();

Route::get('/chat', function() {
	return view('chat');
})->middleware('auth');

Route::get('/getmessages', function() {
	// return App\MessageChat::with('user')->get();
	return App\MessageChat::orderBy('created_at', 'desc')->with('user')->get();

		// $posts = Post::orderBy('created_at', 'desc')->get();
})->middleware('auth');

Route::post('/getmessages', function() {
	$user = Auth::user();

	$message = $user->messages()->create([
		'message' => request()->get('message')
	]);

	//Anounce that a new msg ahs benn posted

	broadcast(new MessagePosted($message, $user))->toOthers();

	return ['status' => 'OK'];
	// return App\MessageChat::with('user')->get();
})->middleware('auth');


Route::get('/tut-about', function() {
	return view('tut.about');
});