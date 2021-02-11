<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded within a group which contains the "web" middleware group.
| Now create something amazing!
|
*/
Route::group(['prefix' => 'resources'], function () {
    Route::resource('categories', 'CategoriesController')
        ->only('index', 'destroy');
    Route::resource('users', 'UsersController')
        ->only('show');
});
