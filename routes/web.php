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

Route::get ('/about', function() {
	return '<h1>Assalamualaikum</h1>'
			.'Selamat Datang Di WebApp Saya<br>'
			.'Laravel, AJIB.';
		});

Route::get ('user/{nama}', function ($a) {
	return 	'Nama Saya Adalah : <b>' .$a.'<b>';
		});

Route::get('/Warungelite/{Alucard}/{Karina}/{Argus}', function ($a,$b,$c) {
	return '<h1>Selamat Menikmati.....</h1>'
	.'Makannya: <b>' .$a.'</b><br>'
	.'Minumnya : <b>' .$b.'</b><br>'
	.'Cemilanya : <b>' .$c.'</b><br>';

});

Route::get ('user/{nama?}', function ($a ="Seferagic") {
	return 	$a;
		});