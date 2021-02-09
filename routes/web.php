<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/mahasiswa','MahasiswaController@index');

//CRUD
//read
Route::get('/students','StudentsController@index');
//create
Route::get('/students/create','StudentsController@create');
//show
Route::get('/students/{student}','StudentsController@show');
//create_store
Route::post('/students','StudentsController@store');
//delete
Route::delete('/students/{student}','StudentsController@destroy');
//update
Route::get('/students/{student}/edit','StudentsController@edit');
Route::patch('/students/{student}','StudentsController@update');