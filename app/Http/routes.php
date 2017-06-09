<?php

Use App\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('welcome');
});

Route::get('/map', function () {
    return 'hi';
});

Route::get('/map', function () {
    return view('post');
});

Route::get('my_test/{id}','PostsController@show_id');

Route::get('/find', function(){

    $posts = Post::all();

    foreach ($posts as $post)
    {
         var_dump($post->content);
    }
    dd();
});

Route::get('/find_where', function(){

    $posts = Post::where('id',3)->orderBy('id','desc')->take(1)->get();

    return $posts;
});




Route::resource('posts','PostsController');

Route::get('test_create', 'PostsController@create');

Route::get('test_store', 'PostsController@store');
Route::get('/posts/{id}', 'PostsController@destroy');


Route::resource('categories','CategoriesController');
Route::get('test_create_category', 'CategoriesController@create');
Route::get('store', 'PostsController@store');






