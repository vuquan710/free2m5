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
Route::prefix('admin')
//domain(env('DOMAIN_ADMIN', 'admin.fashion-dev.com'))
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.auth.login');
        });
        Route::match(['get'], 'create', ['as' => 'admin.auth.create', 'uses' => 'AuthController@create']);
        Route::match(['get'], 'logout', ['as' => 'admin.auth.logout', 'uses' => 'AuthController@logout']);
        Route::match(['post'], 'forgot-password', ['as' => 'admin.auth.forgotPassword', 'uses' => 'AuthController@forgotPassword']);
        Route::match(['get', 'post'], 'reset-password/{token}', ['as' => 'admin.auth.resetPassword', 'uses' => 'AuthController@resetPassword']);
        Route::match(['get', 'post'], 'login', ['as' => 'admin.auth.login', 'uses' => 'AuthController@login']);
    });

Route::namespace('Client')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/new', 'HomeController@getNewCourses')->name('new');
    Route::get('/next', 'HomeController@getNextCourses')->name('next');
    Route::get('/test', 'HomeController@index')->name('test');
    Route::get('/waiting', 'HomeController@getWaitingStudent')->name('waiting');
    Route::get('/tutoring', 'HomeController@getTutoring')->name('tutoring');
    Route::get('/off', 'HomeController@getOffStudent')->name('off');
});