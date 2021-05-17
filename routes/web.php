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


Route::get('/dem', function(){
    return view('connect.html.demande');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/etudiants', function(){
    return view('etudiant.index');
})->middleware( 'auth' , 'admin');

Route::get('/entreprise', 'HomeController@entreprise')->middleware('admin');



Route::get('/accueil', function(){
    return view('admin.accueil');
})->name('accueil')->middleware('admin');

Route::resource('admins', 'Admin\AdminController' );
Route::resource('etudiants', 'Admin\EtudiantController' );
Route::resource('entreprises', 'Admin\EntrepriseController' );
Route::resource('enseignants', 'Admin\EnseignantController' );

