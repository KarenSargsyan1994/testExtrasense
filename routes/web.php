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

Route::get('/{any}', function () {
    return view('test');
})->where('any', '.*');
Route::post('get_answers', 'App\Http\Controllers\ExtrasencesController@getAnswers');
Route::post('get_extrasenses_data', 'App\Http\Controllers\ExtrasencesController@getExtrasencesData');

