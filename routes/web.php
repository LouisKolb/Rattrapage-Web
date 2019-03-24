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

//Route pour accueil
Route::get('/', 'PagesController@accueil');

Auth::routes();//Route pour login et register

//Route::get('login', 'PagesController@login');

Route::get('/home', 'HomeController@index')->name('home');

//Routes pour onglets du site
Route::get('getevententries/{idevent}', 'PagesController@getEventEntries');
Route::get('downloadpictures', 'PagesController@exportpictures');
Route::get('importpicture/{idevent}', 'PagesController@importpicture');
Route::post('importpicture/{idevent}', 'PagesController@actionimportpicture');
Route::get('boiteaidees', 'PagesController@boiteaidees');
Route::post('boiteaidees', 'PagesController@voteevent');
Route::get('createcat', 'PagesController@createcat');
Route::post('createcat', 'PagesController@actioncreatecat');
Route::get('accueil', 'PagesController@accueil');
Route::get('event', 'PagesController@event');
Route::get('createevent', 'PagesController@createevent');
Route::post('createevent', 'PagesController@actioncreateevent');
Route::get('createproduct', 'PagesController@createproduct');
Route::post('createproduct', 'PagesController@actioncreateproduct');
Route::get('ecom', 'PagesController@ecom');
Route::post('ecom', 'PagesController@panieradd');
Route::get('panier', 'PagesController@panier');
Route::post('panier', 'PagesController@paniermaj');
Route::get('cat/{idcat}', 'PagesController@catecom');
Route::get('event/{idevent}', 'PagesController@visuevent');
Route::post('event/{idevent}', 'PagesController@switchregisterevent');
Route::post('event/{idevent}/report', 'PagesController@switchreportevent');
Route::post('event/{idevent}/approve', 'PagesController@approveevent');
Route::get('profil', 'PagesController@profil');
Route::get('privacy', 'PagesController@privacy');
Route::get('mescommandes', 'PagesController@mescommandes');
Route::get('orderlist', 'PagesController@orderlist');
Route::post('orderlist', 'PagesController@finishorder');
Route::get('photo/{idphoto}', 'PagesController@photo');
Route::post('photo/{idphoto}', 'PagesController@votephoto');
Route::get('ventes', 'PagesController@ventes');

//Route commentaire
Route::post('photo/{idphoto}/publishcommentary', 'PagesController@storecomment');
Route::post('photo/{idphoto}/deletecommentary', 'PagesController@deletecomment');

//Route recherches ecommerce
Route::any('/search', 'PagesController@search');

//Route pour le forum
Route::get('forum', 'forumController@forum');
