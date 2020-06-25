<?php

use App\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Auth::routes();


Route::get('/', 'VacatureController@index')->name('AllVacature');
Route::any('/search', 'VacatureController@search')->name('searchVacature');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/vacature/create', 'VacatureController@create')->name('createVacature');
    Route::post('/vacature', 'VacatureController@store')->name('storenewVacature');
});

Route::get('/vacature/{id}', 'VacatureController@VacaturePage')->name('VacaturePage');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/apply/{id}', 'VacatureController@apply')->name('applyforVacature');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/school/create', 'SchoolController@create')->name('addSchool');
    Route::post('/school', 'SchoolController@store')->name('storenewSchool');
});


Route::get('/user/{user}', 'ProfileController@index')->name('profile');
