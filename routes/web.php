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
Route::get('/ins', function () {
    return view('connect.html.inscription');
});
Route::get('/con', function () {
    return view('connect.html.auth');
});
Route::middleware('auth' )->group(function () {

Route::get('/profil',function(){return view('profil.profil');})->middleware('auth');
//----------------------Demandes----------------------------
Route::get('/dem', 'DemandeController@index')->middleware('auth')->name('index');

Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');

Route::get('/formm/{idDemande}','DemandeController@test')->name('formm');
Route::post('/formm/{idDemande}', 'DemandeController@store')->name('submit');

Route::get('/form', function(){
    return view('connect.html.demandeForm');})->name('formDemande')->middleware('auth');
});
Route::get('/liste-demandes','DemandeController@getDemandes')->name('demandesList');
Route::delete('/liste-demandes/{id}', 'DemandeController@destroy')->name('delete');
//----------------------Demandes----------------------------

Auth::routes();
Route::get('/admin-dashboard', function () {
    return 'admin';
})->middleware('auth','checkAdmin');
Route::get('/home', 'HomeController@index')->name('home');

//test
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::resource('demandes','DemandeController');
