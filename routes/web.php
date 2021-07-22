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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    //return "Hello World";
    //return redirect()->route('user');
    return redirect('user')->with('status', 'Welcome to laravel!');
    //return redirect('user');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user','App\Http\Controllers\UserController@index')->name('user');
    Route::post('user','App\Http\Controllers\UserController@post');
    Route::resource('post', 'App\Http\Controllers\PostController')->names([
    
    ]);
});


//Route::middleware([EnsureTokenIsValid::class])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
 //});





