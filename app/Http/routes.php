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


/**
 * Home Page
 */

Route::get('/', 'PagesController@home');

/**
 * Notices
 */


Route::get('notices/create/confirm' , 'NoticesController@confirm');

Route::resource('notices', 'NoticesController');

/**
 * Auth
 */

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

]);

