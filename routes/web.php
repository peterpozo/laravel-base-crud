<?php

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

Route::get('/', 'HomepageController@home')->name('home'); // homepage del sito (per i visitatori)
Route::get('/dashboard', 'HomepageController@dashboard')->name('dashboard'); // dashboard dell'amministratore

Route::resource('comics', 'ComicsController');
