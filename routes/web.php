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

// use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('roles', 'RoleController');

// Route::resource('tasks', 'TaskController');

Route::get('/task', 'TaskController@index');
Route::get('/task/create', 'TaskController@create');
Route::post('/task/create', 'TaskController@store');
Route::get('/task/edit', 'TaskController@edit');
Route::post('/task/edit', 'TaskController@update');
Route::post('/task/destroy', 'TaskController@destroy');

Route::get('/dashboard', 'DashboardController@index');