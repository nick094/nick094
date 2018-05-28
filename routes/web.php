<?php



Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts','PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::delete('/post/{id}/delete', 'PostController@destroy');
Route::post('/post/{id}/edit', 'PostController@edit');
Route::post('/post/{id}/update', 'PostController@update');

Route::get('/posts/tag/{tag}','TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::post('/posts/{post}/comments/edit', 'CommentsController@edit');	// need to do it,clear view
Route::post('/posts/{post}/comments/update', 'CommentsController@update'); //need to do it,clear view
Route::delete('/comment/{id}/delete', 'CommentsController@destroy');
Route::post('/comment/{id}/edit', 'CommentsController@edit');
Route::post('/comment/{id}/update', 'CommentsController@update');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');