<?php




Route::get('/', 'TasksController@index')->name('home');

Route::get('/tasks/create', 'TasksController@create');

Route::post('/posts', 'TasksController@store');

Route::get('/tasks/tags/{tag}', 'TagsController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/tasks/{task}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::post('/login', 'SessionsController@store');

Route::get('/login', ['as' => 'login', 'uses' =>'SessionsController@create']);

Route::get('/logout', 'SessionsController@destroy');

Route::post('/updatelike/{task}', 'TasksController@storelike');