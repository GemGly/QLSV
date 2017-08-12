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

Route::get('/room','LopController@getLop');
Route::get('/room/new','LopController@listLop');
Route::post('/room/new','LopController@addLop');

Route::get('/sualop/{id}','LopController@editLop');
Route::post('/sualop/{id}','LopController@updateLop');

Route::get('/room/{id}','LopController@destroy');

Route::get('/sv','SinhvienController@getSV');
Route::get('/sv/new','SinhvienController@listSV');
Route::post('/sv/new','SinhvienController@addSV');

Route::get('/suasv/{id}','SinhvienController@editSV');
Route::post('/suasv/{id}','SinhvienController@updateSV');

Route::get('/sv/{id}','SinhvienController@destroy');