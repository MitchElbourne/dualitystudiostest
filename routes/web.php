<?php

use App\Http\Controllers\NoteController;
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

Route::get('/', "NoteController@index");

Route::post('/notes', "NoteController@store");
Route::get('/notes/create', 'NoteController@create');
Route::get('/notes/edit/{note}', "NoteController@edit");
Route::get('/notes/delete/{note}', "NoteController@destroy");
Route::put('/notes/{note}', "NoteController@update");