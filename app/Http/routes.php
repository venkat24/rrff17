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

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/api/registrationwebhook','PaymentsController@handleTownscriptWebhook');

Route::group(['middleware' => 'checkSessionAdmin'], function() {
    Route::get('/admin/getposter','SubmissionsController@getPosterAdmin');
    Route::get('/admin/home','AdminController@adminMainView');
});

Route::group(['middleware' => 'checkSession'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/api/getposter','SubmissionsController@getPoster');
});

Route::group(['middleware' => 'setResponseHeaders'], function() {
    // Authentication Routes
    Route::post('/api/login','AuthController@authenticateUser');
    Route::get('/api/logout','AuthController@logoutUser');

    // Registration Routes
    Route::post('/api/register','RegistrationController@registerUser');

    // Admin Routes
    Route::post('/admin/login','AdminController@adminLogin');
    Route::post('/admin/logout','AdminController@adminLogout');
});

Route::group(['middleware' => ['checkSessionAdminJSON','setResponseHeaders']], function() {
    Route::post('/api/setmoviestatus','SubmissionsController@setMovieStatus');
});

Route::group(['middleware' => ['checkSessionJSON','setResponseHeaders']], function() {
    // Submission Routes
    Route::get('/api/getsubmissionstatus','SubmissionsController@getCurrentStatus');
    Route::post('/api/setsynopsis','SubmissionsController@setSynopsis');
    Route::post('/api/settitle','SubmissionsController@setTitle');
    Route::post('/api/uploadposter','SubmissionsController@setPoster');
});
