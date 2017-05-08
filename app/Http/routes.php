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

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/home','AdminController@adminMainView');

Route::group(['middleware' => 'setResponseHeaders'], function() {
    // Submission Routes
    Route::get('/api/getsubmissionstatus','SubmissionsController@getCurrentStatus');
    Route::post('/api/setsynopsis','SubmissionsController@setSynopsis');
    Route::post('/api/uploadposter','SubmissionsController@setPoster');

    // Authentication Routes
    Route::post('/api/login','AuthController@authenticateUser');
    Route::post('/api/logout','AuthController@logoutUser');

    // Registration Routes
    Route::post('/api/register','RegistrationController@registerUser');

    // Admin Routes
    Route::post('/admin/login','AdminController@adminLogin');
    Route::post('/admin/logout','AdminController@adminLogout');
});
