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

use App\Http\Controllers\EntrepriseController;


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
Route::get('/profil','EntrepriseController@index')->middleware('auth','checkEntreprise')->name('profil');
Route::get('/inscriE',function(){
    return view('inscriEntreprise.inscription');
});
Route::get('/updateE',function(){
    return view('updateEntreprise.updateEntreprise');
});
Route::get('/index',function(){
    return view('home.index');
});

Route::get('/dem', function(){
    return view('connect.html.demande');
});

Route::post('/inscriE','EntrepriseController@store')->name('store');
Route::post('/updateE','EntrepriseController@edit')->name('update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


