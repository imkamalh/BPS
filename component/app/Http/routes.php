<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
   Route::auth(); 
});

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/home', 'HomeController@index');
    Route::get('/', function () {
       if(Auth::user() -> level_User == 1) {
           $remember = (Input::has('remember')) ? true : false;
           return view('homee/homee');
       } 
       if(Auth::user() -> level_User == 2) {
           $remember = (Input::has('remember')) ? true : false;
           return view('homee/homee');
       } 
       if(Auth::user() -> level_User == 3) {
           $remember = (Input::has('remember')) ? true : false;
           return view('homee/homee');
       } 
       if(Auth::user() -> level_User == 4) {
           $remember = (Input::has('remember')) ? true : false;
           return view('homee/homee');
       } 
       else { 
           return view('auth/login');
       }
    });
    
    Route::get('/survey', 'surveyController@index');
});
    
Route::get('admin', ['middleware' => ['web', 'auth', 'admin'],function () {
    return view('homee/homee');
}]);

