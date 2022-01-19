<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\databrgController;
use App\Http\Controllers\datasuplierController;
use App\Http\Controllers\datapenjualanController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contacs', function () {
    return view('contacs');
});
Route::get('/editspl', function () {
    return view('editspl');
});
Route::get('/databrg','databrgController@index')->name('databrg');
Route::get('/inputbrg','databrgController@create')->name('inputbrg');
Route::post('/simpanbrg','databrgController@store')->name('simpanbrg');
Route::get('/editbrg/{id}','databrgController@edit')->name('editbrg');
Route::post('/updatebrg/{id}','databrgController@update')->name('updatebrg');
Route::get('/deletebrg/{id}','databrgController@destroy')->name('deletebrg');


Route::get('/dataspl','datasuplierController@index')->name('dataspl');
Route::get('/inputspl','datasuplierController@create')->name('inputspl');
Route::post('/simpanspl','datasuplierController@store')->name('simpanspl');
Route::get('/editspl/{id}','datasuplierController@edit')->name('editspl');
Route::post('/updatespl/{id}','datasuplierController@update')->name('updatespl');
Route::get('/deletespl/{id}','datasuplierController@destroy')->name('deletespl');

Route::get('/datapenjualan','datapenjualanController@index')->name('datapenjualan');
Route::get('/inputpenjualan','datapenjualanController@create')->name('inputpenjualan');
Route::post('/simpanpenjualan','datapenjualanController@store')->name('simpanpenjualan');
Route::get('/editpenjualan/{id}','datapenjualanController@edit')->name('editpenjualan');
Route::post('/updatepenjualan/{id}','datapenjualanController@update')->name('updatepenjualan');
Route::get('/deletepenjualan/{id}','datapenjualanController@destroy')->name('deletepenjualan');