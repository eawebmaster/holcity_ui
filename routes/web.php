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

Route::get('/', 'Web\HomeController@index');
Route::get('/oteller', 'Web\HotelsController@index');
Route::get('/termal-oteller', 'Web\HotelsController@thermal_hotel');
Route::get('/bungalow', 'Web\HotelsController@index');
Route::get('/tatil-evleri', 'Web\HotelsController@index');
Route::get('/kiralik', 'Web\HotelsController@index');
Route::get('/satilik', 'Web\HotelsController@index');
Route::get('/tatil-kazan', 'Web\HotelsController@index');
// Route::get('/image-file/{file?}', function($file){
//     return file_get_content('https://tatilsepeti.cubecdn.net/'+$file);
// });
Route::group(['prefix' => 'image-file'], function () {
    Route::get('{params?}', function($params){

      $img = \Image::make('https://tatilsepeti.cubecdn.net/'.$params);

      return $img->response('jpg');

    })->where('params', '(.*)');

});
Route::group(['prefix'=>'/web/api'], function(){
  Route::get('/homeHotels', 'Web\ApiController@start');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
