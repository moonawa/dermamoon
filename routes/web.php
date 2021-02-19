<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listuser', 'UserController@index');
Route::post('/listuser', 'UserController@store');

Route::prefix('auth')->group(function(){
    Route::post('init', 'AppController@init');

    Route::post('login', 'AppController@login');
    Route::post('register', 'AppController@register');
    Route::post('logout', 'AppController@logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// pour admin
Route::get('/admin', function () {return view('/layouts/admin'); });

// pour medecin
Route::get('/medecin', function () {return view('/layouts/medecin'); });
Route::resource('medecins', 'DermatoController');
Route::get('/getPatient', 'DermatoController@getPatient')->name('getPatient');


// pour patient
Route::get('/patient', function () {return view('/layouts/patient'); });
Route::resource('patients', 'PatientController');
