<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [
    'uses' => 'PagesController@home',
    'as'   => 'pages.home'
]);

Auth::routes();

Route::prefix('admin')->group(function() {

    Route::get('/dashboard', [
        'uses' => 'Admin\DashboardController@dashboard',
        'as' => 'admin.dashboard'
    ]);

    Route::resource('roles', 'Admin\RolesController', ['except' => ['create', 'show']]);

    Route::resource('permissions', 'Admin\PermissionsController', ['except' => ['create', 'show']]);

    Route::resource('users', 'Admin\UsersController');

    Route::resource('posts', 'Admin\PostsController');

    Route::resource('comments', 'Admin\CommentsController');

    Route::resource('tags', 'Admin\TagsController');
});

