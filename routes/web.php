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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::resource('users', 'UserController');
    Route::get('news','NewsController@index');

//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});
//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);
//


});
