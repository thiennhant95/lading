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
Route::get('company', function (){
    return view('company');
});
Route::get('user', function (){
    return view('user');
});
Route::get('estimate', function (){
    return view('estimate');
});
Route::get('assessor', function (){
    return view('assessor');
});


