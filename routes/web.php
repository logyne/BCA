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

//Route::get('/' ,'PagesController@index');
//Route::get('/about','PagesController@services');
//Route::get('/service' ,'PagesController@about');
/*
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});
Route::get('/users/{id}/{user}', function ($id,$user) {
    return 'This is the  user '.$id.'and his id'.$user;
});*/
Route::get('/', function () {
    return '<h1>Hello kady!</h1>';
});

/*Route::get('/about', function () {
    return view('Pages.about');
});*///
//Route::get('/' ,'Pagecontroller@index');

