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

Route::get('/login', function () {
    return view('admin.login');
});

Route::post('/login', array('uses'=>'\App\Http\Controllers\Auth\LoginController@login'))->name('login');

Route::middleware(['auth'])->group(function () {

Route::get('/home', array('uses'=>'AdminController@index'));

Route::get('/transactions', array('uses'=>'AdminController@transactions'));

Route::get('/products', array('uses'=>'AdminController@products'));

Route::get('/editproduct/{id}', array('uses'=>'AdminController@editproduct'));

Route::post('/editproduct', array('uses'=>'AdminController@etproduct'));

Route::get('/attempts', array('uses'=>'AdminController@attempts'));

Route::get('/logouts', function (){
    Auth::logout();
    return redirect('/login');
});

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/buydata', function () {
    return view('buydata');
});

Route::get('/buydata/{network}', array('uses'=>'AdminController@buydatalist'));

Route::get('/buyairtime', function () {
    return view('buyairtime');
});

Route::get('/buypaytv', function () {
    return view('buypaytv');
});


Route::post('/action', array('uses'=>'InstantProcessController@postData'));

Route::get('/process_req/{token}/{dref}', array('uses'=>'InstantProcessController@continue'));
