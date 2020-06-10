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

Route::get('/','HomeController@index' );
Route::get('/info', 'InfoController@index');
Route::get('/cosa-sto-facendo', 'CosaStoFacendoController@index');
Route::get('/che-figata', 'CheFigataContoller@index');