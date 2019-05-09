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



////////////Frontend///////

Route::get('/',[
    'uses' => 'FrontendController@index',
    'as'   => 'index'
]);

Route::get('/about',[
    'uses' => 'FrontendController@about',
    'as'   => 'about'
]);


Route::get('agent',[
    'uses' => 'FrontendController@agent',
    'as'   => 'agent'
]);

Route::get('agents',[
    'uses' => 'FrontendController@agents',
    'as'   => 'agents'
]);

Route::get('blog',[
    'uses' => 'FrontendController@blog',
    'as'   => 'blog'
]);

Route::get('contact',[
    'uses' => 'FrontendController@contact',
    'as'   => 'contact'
]);

Route::get('listing',[
    'uses' => 'FrontendController@listing',
    'as'   => 'listing'
]);

Route::get('login',[
    'uses' => 'FrontendController@login',
    'as'   => 'login'
]);

Route::get('post',[
    'uses' => 'FrontendController@post',
    'as'   => 'post'
]);

Route::get('search',[
    'uses' => 'FrontendController@search',
    'as'   => 'search_results'
]);

