<?php

use Illuminate\Http\Request;
use App\Gif;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('gifs/id/{id}', 'GifController@show');
Route::get('gifs/all', 'GifController@index');
Route::get('gifs/search/{title}', 'GifController@search');
Route::get('gifs/random', 'GifController@random');