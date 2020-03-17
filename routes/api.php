<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Auth'], function () {
//    Route::post('login', 'RequestController@updateApp');
});

Route::namespace('Api')->group(function() {
    Route::resource('info_users', 'UserController');
    Route::resource('info_apps', 'AppController');
    Route::resource('info_scores', 'ScoreController');
    Route::resource('info_questions', 'QuestionController');
    Route::resource('info_wins', 'WinController');
});
Route::middleware('jwt')->group(function() {

    # Folder Auth
    Route::namespace('Auth')->group(function() {
        Route::get('me', 'AuthController@me');
        Route::post('logout', 'AuthController@logout');
    });

    /*Route::namespace('Api')->group(function() {
        Route::resource('info_users', 'UserController');
        Route::resource('info_apps', 'AppController');
    });*/
});

# Folder Api
Route::namespace('Auth')->group(function() {
    #Web
    Route::post('login_web', 'AuthController@login')->name('login_web');
});

# Folder Api
Route::namespace('Api')->group(function() {
    #App
    Route::post('login', 'RequestController@updateApp');


    Route::get('info_app', 'RequestController@infoApp');
    Route::get('info_question/{app_id}', 'RequestController@infoQuestion');
    Route::get('info_score/{app_id}', 'RequestController@infoScore');
    Route::post('info_result', 'RequestController@infoResult');
    Route::post('info_phone', 'RequestController@infoPhone');
});
