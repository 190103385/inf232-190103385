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

//Introduction route
Route::get('/teacher', function () {
    return "Hi, teacher. This is my 4-th lab work";
});

//Test route
Route::get('/test/{name}/{surname?}', function ($name,$surname=' ') {
    return "Hello, " . $name . " " . $surname;
})-> where('name','[a-zA-Z0-9]+');

Route::get('/lab4', function () {
    return view('user') -> with('name', 'Nurdaulet') -> with('surname', 'Kurmangazyuly');
});