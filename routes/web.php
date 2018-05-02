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
Route::get('user', 'UserController@user');
Route::get('estimate','EstimateController@estimate');
Route::get('assessor','AssessorController@index');
Route::get('/assessor/get-make-car','AssessorController@get_maker_car');
Route::post('/company/insert','TraderController@insert');
Route::post('estimate/transfer-info','EstimateController@transfer_info');
Route::post('estimate/seller-add','EstimateController@seller_add');
Route::post('user/set-info','UserController@setinfouser');

