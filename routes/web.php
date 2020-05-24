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

Route::get('/', "NotesController@index");

Route::get("/note", "NotesController@create");
Route::post("/note", "NotesController@insert");
Route::get("/note/{id}", "NotesController@show");
Route::post("/note/{id}/delete", "NotesController@delete");
Route::get("/note/{id}/edit", "NotesController@edit");
Route::post("/note/{id}/update", "NotesController@update");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
