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

Route::get('/test/{name}/{surname?}', function ($name,$surname=' ') {
    return "Hello, " . $name . " " . $surname;
})-> where('name','[a-zA-Z0-9]+');

Route::get('/redir', function () {
    return redirect("test");
});