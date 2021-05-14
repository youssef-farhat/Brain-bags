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
})->middleware('auth');

Route::get('/dem', function(){
    return view('connect.html.demande');
});
Route::get('/profileetud', function(){
    return view('etudiantprofile.profilEtud');
})->middleware('auth','checkifetudiant');

Route::get('/modifprofiletude', function(){
    return view('etudiantprofile.modifProfilEtude');
})->name('modifprofE');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

