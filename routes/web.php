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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/new', function() {
// 	return view('new');
// });

//creating direct views
// Route::view('/new', 'new');


// Route::get('/new', function() {
// 	return view('new', ['haha'=>'usershopping']);
// });

//calling uri parameter to the view
Route::get('/new/{user}', function($user) {
	return view('new', ['user'=>$user]);
});

Route::redirect('/sample', '/new');

//calling controller function on the route
Route::get('/show', 'userController@show');

//calling controller function showing the view using route
Route::get('/showView', 'userController@showView');

Route::get('/block', function() {
	return view('block.block');
});



