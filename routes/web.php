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

<<<<<<< HEAD
=======
use App\Http\Controllers\EntrepriseController;
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b


Route::get('/', function () {
    return view('welcome');
});
Route::get('/ins', function () {
    return view('connect.html.inscription');
})->name('ins');
Route::get('/con', function () {
    return view('connect.html.auth');
});
Route::middleware('auth' )->group(function () {

Route::get('/profil',function(){return view('profil.profil');})->middleware('auth');
//----------------------Demandes----------------------------
Route::get('/dem', 'DemandeController@index')->middleware('auth')->name('index');
    return view('connect.html.authetude');
});
<<<<<<< HEAD
Route::get('/profil',function(){
    return view('profil.profil');
})->middleware('auth');

Route::get('/dem', function(){
    return view('connect.html.demande');
=======
Route::get('/profil','EntrepriseController@index')->middleware('auth','checkEntreprise')->name('profil');
Route::get('/inscriE',function(){
    return view('inscriEntreprise.inscription');
});
Route::get('/updateE',function(){
    return view('updateEntreprise.updateEntreprise')->middleware('checkEntreprise');
});
Route::get('/index',function(){
    return view('home.index');
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b
});
Route::get('/profileetud', function(){
    return view('etudiantprofile.profilEtud');
})->middleware('auth','checkifetudiant');

<<<<<<< HEAD
Route::get('/modifprofiletude', function(){
    return view('etudiantprofile.modifProfilEtude');
})->name('modifprofE');

Route::post('/ins','EtudiantController@store')->name('store');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::resource('Etudian','EtudiantControler');

=======
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
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b

