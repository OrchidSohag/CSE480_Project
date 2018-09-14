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

Route::get('/fhome', function () {
    return view('WorldCupRussia');
})->name('fhome');

Route::get('stadium', 'StadiumController@index')->name('stadium');

Route::get('groups', 'GroupsController@index')->name('groups');

Route::get('/matches', 'MatchesController@index')->name('matches');

Route::get('/players/{country}', 'PlayersController@index');

Route::get('country', 'CountryController@index')->name('teams');

Auth::routes();

//Route::get('/userlogin', 'Auth\LoginController@showLoginForm')->name('userlogin');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pdetails/{name}', 'PlayersController@Details')->name('pdetails');

Route::get('/sdetails/{stadium}', 'StadiumController@Details')->name('sdetails');

Route::get('/awards', 'AwardsController@index')->name('awards');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/comment', 'CommentController@index')->name('comment');
