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
    return view('connect.html.authetude');
});
Route::get('/profil','EntrepriseController@index')->middleware('auth','checkEntreprise')->name('profil');
Route::get('/inscriE',function(){
    return view('inscriEntreprise.inscription');
});
Route::get('/updateE',function(){
    return view('updateEntreprise.updateEntreprise')->middleware('checkEntreprise');
});
Route::get('/index',function(){
    return view('home.index');
});

Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');

Route::post('/inscriE','EntrepriseController@store')->name('store');
Route::post('/updateE','EntrepriseController@edit')->name('update');


Route::get('/form', function(){
    return view('connect.html.demandeForm');})->name('formDemande')->middleware('auth');
Route::get('/liste-demandes','DemandeController@getDemandes')->name('demandesList');
Route::delete('/liste-demandes/{id}', 'DemandeController@destroy')->name('delete');
//----------------------Demandes----------------------------

Auth::routes();
Route::get('/admin-dashboard', function () {
    return 'admin';
})->middleware('auth','checkAdmin');
Route::get('/home', 'HomeController@index')->name('home');

