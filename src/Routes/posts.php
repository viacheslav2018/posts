<?php

use Illuminate\Support\Facades\Route;

//Route::get('/posts', function () {
//    // posts -namespase in PostsServiceProvider->loadView
//    return view('posts::index');
//});
Route::get('/posts', [\FxApp\Posts\Http\Controllers\PostController::class,'index']);
