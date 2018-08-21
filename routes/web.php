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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::resource('office', 'OfficeController');
Route::post('/office', 'OfficeController@address_index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parse/codes', 'ParseController@codes_parse');
Route::get('/parse/offices', 'ParseController@offices_parse');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    $images = \App\OfficeObjects::find(1)->images;

    foreach ($images as $image) {
        print $image->image;
    }
});


