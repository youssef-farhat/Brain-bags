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
Route::get('/new', function () {
    return view('connect.html.auth');
});
Route::get('/ins', function () {
    return view('connect.html.inscription');
});
Route::get('/con', function () {
    return view('connect.html.authetude');
});
Route::get('/profil',function(){
    return view('profil.profil');
});

Route::get('/dem', function(){
    return view('connect.html.demande');
});

Route::get('/ajoutstage', function(){
    return view('stage.ajoutstage');
});

Route::get('/modifstage', function(){
    return view('stage.modifstage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

