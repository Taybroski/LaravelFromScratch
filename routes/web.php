<?php

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Route::resource('tasks', 'TasksController');
Route::resource('comments', 'CommentsController');
Auth::routes();
