<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ArticleController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/detail/{id}', 'ArticleController@detail');

Route::get('/articles/add', 'ArticleController@add');
Route::post('/articles/add', 'ArticleController@create');
Route::get('/articles/delete/{id}', 'ArticleController@delete');

Route::post('/comments/add', 'CommentController@create');
Route::get('/comments/delete/{id}', 'CommentController@delete');

Auth::routes();

Route::get('/home', 'ArticleController@index')->name('home');
