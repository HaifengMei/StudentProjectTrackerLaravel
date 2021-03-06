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
use App\Projects; 

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminsController@index')->name('admin.dashboard');
    Route::get('/review/{project}', 'AdminsController@review');
    Route::post('/update/{project}', 'AdminsController@update');
});

Route::get('/', 'ProjectsController@index');
Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'StudentsController@showUploadForm');
Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/addcomment/{$project}', 'CommentsController@add')->name('comments.add')
Route::post('/projects/{project}','CommentsController@store')->middleware('auth');;
Route::get('/projects/tags/{tag}', 'TagsController@index');
Route::get('/projects/students/{student}','ProjectsController@showStudent');
Route::get('/project/download/{file}', 'ProjectsController@getDownload')->name('project.download');
// ->middleware('auth')




Auth::routes();

Route::get('/home', 'StudentsController@index');
Route::post('/home' ,'StudentsController@uploadAvatar');




