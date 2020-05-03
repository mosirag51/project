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

//Route::get('/', function () {
  //  return 'wellcome to my website';
//});
// Route::get('/about', function () {
//     return view('pages.about');
// });
Route::get('/', 'pagesController@index');
Route::get('/services', 'pagesController@services');
Route::get('/about', 'pagesController@about');
//Route::get('/post/{id}/{author}', function ($id,$author) {
//return "The post with id is ".$id . 'has author name ' .$author;
//});
