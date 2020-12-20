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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//manual
Route::get('manual', 'ManualController@index');
Route::get('manual/gang', 'ManualController@gang');
Route::get('manual/organization', 'ManualController@organization');
Route::get('manual/city', 'ManualController@city');
Route::get('manual/equipment', 'ManualController@equipment');
Route::get('manual/business', 'ManualController@business');
Route::get('manual/illegal', 'ManualController@illegal');

//news
Route::get('news', 'NewsController@index');
Route::get('rules', 'NewsController@rules');
Route::get('terms', 'NewsController@terms');
Route::get('privacy', 'NewsController@privacy');

//forum
//forum main
Route::get('forum', 'ForumController@index');
//forum thread
Route::get('forum/create','ForumController@create');
Route::post('forum','ForumController@store');
Route::get('forum/thread/{thread}', 'ForumController@thread');
Route::delete('forum/{thread}', 'ForumController@destroy');
//forum post
Route::get('forum/{forum}/edit', 'ForumController@edit');
Route::patch('forum/{forum}', 'ForumController@update');
//subforum
Route::get('forum/open','ForumController@open');
Route::get('forum/cafe','ForumController@cafe');
Route::get('forum/intro','ForumController@intro');
Route::get('forum/city','ForumController@city');

//game
Route::get('games', 'GameController@index');
Route::get('games/{games}', 'GameController@show');
Route::get('games/{games}/edit', 'GameController@edit');
Route::patch('games/{games}', 'GameController@update');
Route::post('games/create','GameController@create');
Route::post('games','GameController@store');
Route::delete('games/{games}', 'GameController@destroy');

//gang
Route::get('gangs', 'GangController@index');
Route::get('gangs/{gangs}', 'GangController@show');
Route::get('gangs/{gangs}/edit', 'GangController@edit');
Route::patch('gangs/{gangs}', 'GangController@update');
Route::post('gangs/create','GangController@create');
Route::post('gangs','GangController@store');
Route::delete('gangs/{gangs}', 'GangController@destroy');

//building
Route::get('buildings', 'BuildingController@index');
Route::get('buildings/{buildings}', 'BuildingController@show');
Route::get('buildings/{buildings}/edit', 'BuildingController@edit');
Route::patch('buildings/{buildings}', 'BuildingController@update');