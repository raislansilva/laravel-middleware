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

use App\Http\Middleware\FirstMiddleware;
use App\Http\Middleware\TowMiddleware;


Route::get('/', function () {
    return view('welcome');
});

//route::get('/users' ,"UserController@index");
route::get('/users' ,"UserController@index")->middleware('first','tow');

