<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\InstantionController;
use App\Http\Controllers\NurseriesController;
use App\Http\Controllers\FunderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FunderProjectController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('coach', CoachController::class);
Route::get('/coach/{id}/edit', 'App\Http\Controllers\CoachController@edit');
Route::post('/coach/{id}/update', 'App\Http\Controllers\CoachController@update');

Route::resource('instantion', InstantionController::class);
Route::get('/instantion/{id}/edit', 'App\Http\Controllers\InstantionController@edit');
Route::post('/instantion/{id}/update', 'App\Http\Controllers\InstantionController@update');


Route::resource('nurseries', NurseriesController::class);
Route::get('/nurseries/{id}/edit', 'App\Http\Controllers\NurseriesController@edit');
Route::post('/nurseries/{id}/update', 'App\Http\Controllers\NurseriesController@update');

Route::resource('funder', FunderController::class);
Route::get('/funder/{id}/edit', 'App\Http\Controllers\FunderController@edit');
Route::post('/funder/{id}/update', 'App\Http\Controllers\FunderController@update');


Route::resource('project', ProjectController::class);
Route::get('/project/{id}/edit', 'App\Http\Controllers\ProjectController@edit');
Route::post('/project/{id}/update', 'App\Http\Controllers\ProjectController@update');


Route::resource('funder_project', FunderProjectController::class);
Route::get('/funder_project/{id}/edit', 'App\Http\Controllers\FunderProjectController@edit');
Route::post('/funder_project/{id}/update', 'App\Http\Controllers\FunderProjectController@update');



