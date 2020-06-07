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

/*Route::get('/', function () {
   return view('welcome');
});*/


Route::get('/', 'productController@index');
Route::get('/addproduct', 'productController@addproduct');
Route::post('/addproduct', 'productController@add');
Route::get('/view', 'productController@view');
Route::get('/delete/{productId}', 'productController@delete');
Route::get('/edit/{productId}', 'productController@edit');
Route::post('edit', 'productController@update');
Route::view('login', 'login');
Route::post('login', 'productController@login');