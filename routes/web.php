<?php

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Route::resource('tasks', 'TasksController');
Auth::routes();
