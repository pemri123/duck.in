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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/akun-dokter', 'tambahAkunController@create');
//Route::post('/akun-dokter/create','tambahAkunController@store');
//Route::get('/admin', 'profileDokterController@index');
//Route::get('/profile-peternak', 'profilePeternakController@index');



Route::group(['middleware'=> ['auth', 'checkRole:admin']], function (){
    Route::get('/admin', 'HomeController@admin');
    Route::get('/akun-dokter', 'tambahAkunController@create');
    Route::post('/akun-dokter/create','tambahAkunController@store');
});

Route::group(['middleware' => ['auth', 'checkRole:peternak']], function () {
    Route::get('/peternak', 'HomeController@peternak');
    Route::get('/peternak', 'profilePeternakController@index');
});

Route::group(['middleware' => ['auth', 'checkRole:dokter']], function () {
    Route::get('/dokter', 'HomeController@dokter');
    Route::get('/dokter', 'profileDokterController@index');
});

