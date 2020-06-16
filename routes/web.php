<?php

use App\Job;
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

Route::get('/', 'JobsController@index')->name('AllJobs');
Route::get('/job/{id}', 'JobsController@jobPage')->name('JobPage');
Route::get('/apply/{id}', 'JobsController@apply')->name('applyforjob');
Route::any('/search', 'JobsController@search');
