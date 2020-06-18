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


Route::get('/', 'JobsController@index')->name('AllJobs');
Route::any('/search', 'JobsController@search')->name('searchJob');
Route::post('/job', 'JobsController@store')->name('storenewjob');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/job/create', 'JobsController@create')->name('createjob');
});

Route::get('/job/{id}', 'JobsController@jobPage')->name('jobPage');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/apply/{id}', 'JobsController@apply')->name('applyforjob');
});



Route::get('/user/{user}', 'ProfileController@index')->name('profile');
