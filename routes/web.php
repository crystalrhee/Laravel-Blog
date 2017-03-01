<?php

//controller -> PostsController
//eloquent model -> Post
//migration -> create_posts_table

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');