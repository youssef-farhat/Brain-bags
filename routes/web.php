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

Route::get('/profil',function(){
    return view('profil.profil');
})->middleware('auth');
Route::get('/dem', function(){
    return view('connect.html.demande');
});
Route::get('/profil','EntrepriseController@index')->middleware('auth','checkEntreprise')->name('profil');
Route::get('/inscriE',function(){
    return view('inscriEntreprise.inscription');
});

Route::get('/ajoutstage', 'admin\AjoutStageController@index');
Route::POST('/ajoutstage', 'admin\AjoutStageController@store')->name('ajoutstage');
// Route::get('/ajoutstage', function(){
//     return view('stage.ajoutstage');
// });
// )->middleware('auth','checkEntreprise';

Route::get('/modifstage', 'admin\StageController@index');
Route::delete('/modifstage/{id}', 'admin\StageController@destroy')->name('deletestage');
// Route::get('/modifstage', function(){
//     return view('stage.modifstage');
// });
// );

Route::post('/updatestage/{id}', 'admin\UpdateStageController@edit')->name('updatestage');
Route::get('/updatestage', 'admin\UpdateStageController@index')->name('updatestage');
Route::resource('stage','admin\StageController');


Route::get('/modifprofiletude', function(){
    return view('etudiantprofile.modifProfilEtude');
})->name('modifprofE');


Route::post('/ins','EtudiantController@store')->name('store');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::resource('Etudian','EtudiantController');


Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');

Route::post('/inscriE','EntrepriseController@store')->name('storeEn');
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


