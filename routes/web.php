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

Route::get('/notebook', 'KnowledgeController@list');
Route::get('/notebook/view/{id}', 'KnowledgeController@view');
Route::get('/notebook/new', 'KnowledgeController@new');
Route::post('/notebook/store', 'KnowledgeController@store');

Route::get('/produtos', 'ProdutoController@list');
Route::get('/produtos/view', 'ProdutoController@view');
Route::get('/produtos/view/{id}', 'ProdutoController@view');
Route::get('/produtos/new', 'ProdutoController@new');
Route::post('/produtos/store', 'ProdutoController@store');
Route::get('/produtos/destroy/{id}', 'ProdutoController@destroy');