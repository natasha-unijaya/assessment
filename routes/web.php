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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
   return view('welcome');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('post','PostController');
    Route::POST('addPost','PostController@addPost');
    Route::POST('editPost','PostController@editPost');
    Route::POST('deletePost','PostController@deletePost');
  });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/json', 'GorestController@index');
Route::get('/json/{id}', 'GorestController@show');
Route::get('/json/{id}', 'GorestController@edit');
Route::post('/json/update', 'GorestController@update');
Route::delete('/json/{id}', 'GorestController@destroy');


Route::get('/search', 'PostController@search');

Route::post('excelSubmit','ExcelController@excel')->name('excel');


