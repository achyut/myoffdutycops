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
    return View::make('frontend.index');
});

Route::get('terms', function () {
    return View::make('frontend.terms');
});

Route::get('about',array('as'=>'about', function () {
    return View::make('frontend.about');
}));

Route::get('allnews',array('as'=>'allnews','uses'=>'NewsController@allnews'));
Route::get('shownews/{news}',array('as'=>'shownews','uses'=>'NewsController@show'));

Route::get('contact',array('as'=>'contact','uses' => 'ContactsController@create'));
Route::post('contact',array('as'=>'contact','uses' => 'ContactsController@store'));

Route::get('requestservice',array('as'=>'requestservice','uses' => 'RequestservicesController@create'));
Route::post('requestservice',array('as'=>'requestservice','uses' => 'RequestservicesController@store'));

Route::get('policesignup',array('as'=>'policesignup','uses' => 'PolicesignupsController@create'));
Route::post('policesignup',array('as'=>'policesignup','uses' => 'PolicesignupsController@store'));

Route::get('login',array('as'=>'login','uses' => 'UsersController@getLogin'));
Route::post('login', array('as'=>'login','uses' => 'UsersController@doLogin'));
Route::get('logout', array('as'=>'logout','uses' => 'UsersController@doLogout'));

Route::get('forgot', function () {
    return View::make('frontend.forgot');
});
Route::get('changepassword', function () {
    return View::make('frontend.changepassword');
});

Route::group(array('before' => 'auth'), function()
{
    // routes for backend
    Route::get('dashboard', function () {
        return View::make('backend.pages.dashboard');
    });

    Route::get('jobs', function () {
        return View::make('backend.pages.jobs');
    });

    Route::get('job-details', function () {
        return View::make('backend.pages.jobdetails');
    });

    Route::resource('policesignups', 'PolicesignupsController');

    Route::resource('requestservices', 'RequestservicesController');

    Route::resource('contacts', 'ContactsController');
    Route::resource('news', 'NewsController');
    Route::resource('users', 'UsersController');

});
