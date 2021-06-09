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

Route::get('/en', function () {
    return view('profil.index');
});

Route::middleware('auth' )->group(function () {

Route::get('/profilEn/{user}',"EntrepriseController@show")->middleware('auth','checkEntreprise');
//----------------------Demandes----------------------------
Route::get('/dem', 'DemandeController@index')->name('index');
});
// Route::get('/profil','EntrepriseController@index')->middleware('auth','checkEntreprise')->name('profil');
Route::get('/inscriE',function(){
    return view('inscriEntreprise.inscription');
});
Route::get('/updateEn/{user}',function(){
    return view('profil.updateEntreprise');
})->middleware('auth','checkEntreprise')->name('misajourE');;
Route::put('/updateEn/{user}', 'EntrepriseController@update')->middleware('auth','checkEntreprise')->name('updateEn');

Route::get('/index',function(){
    return view('home.index');
});
Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');
Route::get('/profileetud', function(){
    return view('etudiantprofile.profilEtud');
})->middleware('auth','checkifetudiant')->name('profileetud');

Route::put('/modifprofiletude/{user}', 'EtudiantController@update')->name('updateEt');

Route::get('/modifprofiletude', function(){
    return view('etudiantprofile.modifProfilEtude');
})->name('modifprofE');

Route::post('/ins','EtudiantController@store')->name('storeEt');
Auth::routes();
Route::resource('Etudiant','EtudiantController');

Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');

Route::post('/inscriE','EntrepriseController@store')->name('storeEn');
// Route::post('/updateEn','EntrepriseController@edit')->name('updaten');

Route::get('/formm/{idDemande}','DemandeController@test')->name('formm');
Route::post('/formm/{idDemande}', 'DemandeController@store')->name('store');

Route::get('/form', function(){
    return view('connect.html.demandeForm');})->name('formDemande')->middleware('auth');
Route::get('/liste-demandes','DemandeController@getDemandes')->name('demandesList');
Route::delete('/liste-demandes/{id}', 'DemandeController@destroy')->name('delete');
Route::resource('demande', 'DemandeController' );

//----------------------Demandes----------------------------

Auth::routes();
Route::get('/admin-dashboard', function () {
    return 'admin';
})->middleware('auth','checkAdmin');
Route::get('/home', 'HomeController@index')->name('home');

//test
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/etudiants', function(){
    return view('etudiant.index');
})->middleware( 'auth' , 'admin');

Route::get('/entreprise', 'HomeController@entreprise')->middleware('admin');


// -------------------------------------RCHERCHE AVEC REQUETE-----------------------------
//Route::get('/search', 'Admin\AdminController@search');
// -------------------------------------RCHERCHE AVEC REQUETE-----------------------------

Route::get('/profile', function(){
    return view('admin.admin.profile');
})->name('profileAdmin')->middleware('admin');
Route::get('/home', function () {return view('home.index');})->name('home');


Route::resource('admins', 'Admin\AdminController' );
Route::resource('etudiants', 'Admin\EtudiantController' );
Route::resource('entreprises', 'Admin\EntrepriseController' );
Route::resource('enseignants', 'Admin\EnseignantController' );
Route::resource('entreprise', 'EntrepriseController' );

Route::get('/ajoutstage', 'admin\AjoutStageController@index');
Route::POST('/ajoutstage', 'admin\AjoutStageController@store')->name('ajoutstage');
// Route::get('/ajoutstage', function(){
//     return view('stage.ajoutstage');
// });
// )->middleware('auth','checkEntreprise');

Route::get('/modifstage', 'admin\StageController@index');
Route::delete('/modifstage/{id}', 'admin\StageController@destroy')->name('deletestage');
// Route::get('/modifstage', function(){
//     return view('stage.modifstage');
// });
// );

Route::post('/updatestage/{id}', 'admin\UpdateStageController@edit')->name('updatestage');
Route::get('/updatestage', 'admin\UpdateStageController@index')->name('updatestage');
Route::resource('stage','admin\StageController');