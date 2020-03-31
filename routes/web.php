<?php
// Home Route 
Route::get('/', function () {
    return view('index');
});

// PUBG ROUTER CONTROLLER
Route::get('/pubg', 'PUBGController@index');
Route::get('/pubg/register', 'PUBGController@create');
Route::post('/pubg/register/process', 'PUBGController@store');

// Film Pendek CONTROLLER
Route::get('/filmpendek', 'FilmPendekController@index');
Route::get('/filmpendek/register', 'FilmPendekController@create');
Route::post('/filmpendek/register/process', 'FilmPendekController@store');

// Desing Poster CONTROLLER
Route::get('/desainposter', 'DesainPosterController@index');
Route::get('/desainposter/register', 'DesainPosterController@create');
Route::post('/desainposter/register/process', 'DesainPosterController@store');

// PROGAMMABLE LOGIC CONTROLLER
Route::get('/plc', 'PLCController@index');
Route::get('/plc/register', 'PLCController@create');
Route::post('/plc/register/process', 'PLCController@store');

// Lomba Cipta Karya Teknologi CONTROLLER
Route::get('/lkct', 'LKCTController@index');
Route::get('/lkct/register', 'LKCTController@create');
Route::post('/lkct/register/process', 'LKCTController@store');

// Film Pendek CONTROLLER
Route::get('/instalasipenerangan', 'InstalasiPeneranganController@index');
Route::get('/instalasipenerangan/register', 'InstalasiPeneranganController@create');
Route::post('/instalasipenerangan/register/process', 'InstalasiPeneranganController@store');

// Mobile Lege CONTROLLER
Route::get('/ml', 'MobileLegendController@index');
Route::get('/ml/register', 'MobileLegendController@create');
Route::post('/ml/register/process', 'MobileLegendController@store');

Route::post('/send-wa', 'IndexController@question');

Route::get('/bayar', function(){
    return view('pembayaran');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard View
Route::get('/home/desainposter', 'HomeController@desainPosterView');
Route::get('/home/pubg', 'HomeController@PUBGView');
Route::get('/home/lkct', 'HomeController@LKCTView');
Route::get('/home/plc', 'HomeController@PLCView');
Route::get('/home/filmpendek', 'HomeController@filmPendekView');
Route::get('/home/ml', 'HomeController@MLView');
Route::get('/home/instalasipenerangan', 'HomeController@instalasiPeneranganView');

