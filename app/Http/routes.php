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

// Submission Routes
Route::get('/api/getsubmissionstatus','SubmissionsController@getCurrentStatus');
Route::post('/api/setsynopsis','SubmissionsController@setSynopsis');

// Authentication Routes
Route::post('/api/login','AuthController@authenticateUser');
Route::post('/api/logout','AuthController@logoutUser');

// Registration Routes
Route::post('/api/register','RegistrationController@registerUser');
