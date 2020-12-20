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

//Route::get('register', 'App\Http\Controllers\Api\RegisterController@register');

//manual
Route::get('manual', 'App\Http\Controllers\ManualController@index');
Route::get('manual/gang', 'App\Http\Controllers\ManualController@gang');
Route::get('manual/organization', 'App\Http\Controllers\ManualController@organization');
Route::get('manual/city', 'App\Http\Controllers\ManualController@city');
Route::get('manual/equipment', 'App\Http\Controllers\ManualController@equipment');
Route::get('manual/business', 'App\Http\Controllers\ManualController@business');
Route::get('manual/illegal', 'App\Http\Controllers\ManualController@illegal');

//news
Route::get('news', 'App\Http\Controllers\NewsController@index');
Route::get('rules', 'App\Http\Controllers\NewsController@rules');
Route::get('terms', 'App\Http\Controllers\NewsController@terms');
Route::get('privacy', 'App\Http\Controllers\NewsController@privacy');

//users
Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/{user}', 'App\Http\Controllers\UserController@show');
Route::get('users/{user}/edit', 'App\Http\Controllers\UserController@edit');
Route::patch('users/{user}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{user}', 'App\Http\Controllers\UserController@destroy');

//forum
//forum main
Route::get('forum', 'App\Http\Controllers\ForumController@index');
//forum thread
Route::get('forum/create','App\Http\Controllers\ForumController@create');
Route::post('forum','App\Http\Controllers\ForumController@store');
Route::get('forum/thread/{thread}', 'App\Http\Controllers\ForumController@thread');
Route::delete('forum/{thread}', 'App\Http\Controllers\ForumController@destroy');
//forum post
Route::get('forum/{forum}/edit', 'App\Http\Controllers\ForumController@edit');
Route::patch('forum/{forum}', 'App\Http\Controllers\ForumController@update');
//subforum
Route::get('forum/open','App\Http\Controllers\ForumController@open');
Route::get('forum/cafe','App\Http\Controllers\ForumController@cafe');
Route::get('forum/intro','App\Http\Controllers\ForumController@intro');
Route::get('forum/city','App\Http\Controllers\ForumController@city');

//game
Route::get('games', 'App\Http\Controllers\GameController@index');
Route::get('games/{games}', 'App\Http\Controllers\GameController@show');
Route::get('games/{games}/edit', 'App\Http\Controllers\GameController@edit');
Route::patch('games/{games}', 'App\Http\Controllers\GameController@update');
Route::post('games/create','App\Http\Controllers\GameController@create');
Route::post('games','App\Http\Controllers\GameController@store');
Route::delete('games/{games}', 'App\Http\Controllers\GameController@destroy');

//gang
Route::get('gangs', 'App\Http\Controllers\GangController@index');
Route::get('gangs/{gangs}', 'App\Http\Controllers\GangController@show');
Route::get('gangs/{gangs}/edit', 'App\Http\Controllers\GangController@edit');
Route::patch('gangs/{gangs}', 'App\Http\Controllers\GangController@update');
Route::post('gangs/create','App\Http\Controllers\GangController@create');
Route::post('gangs','App\Http\Controllers\GangController@store');
Route::delete('gangs/{gangs}', 'App\Http\Controllers\GangController@destroy');

//building
Route::get('buildings', 'App\Http\Controllers\BuildingController@index');
Route::get('buildings/{buildings}', 'App\Http\Controllers\BuildingController@show');
Route::get('buildings/{buildings}/edit', 'App\Http\Controllers\BuildingController@edit');
Route::patch('buildings/{buildings}', 'App\Http\Controllers\BuildingController@update');

//newspaper
Route::get('newspaper', 'App\Http\Controllers\NewspaperController@index');
Route::get('newspaper/{newspaper}', 'App\Http\Controllers\NewspaperController@show');