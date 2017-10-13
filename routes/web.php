<?php

Route::get('/', 'PostsController@index');
Route::get('/post/{id}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/create', 'PostsController@store');
