<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Activity\Activity;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('{locale}', function($locale) {
    app()->setLocale($locale);

    $activity = Activity::first();

    return view('activity')->with('activity', $activity);
});*/

Route::group(['middleware' => ['web'], 'prefix' => '/admin'], function () {

    Route::get('/', function () {
        if (Auth::check()) {
            return redirect('/admin/accueil');
        }

        return redirect('/admin/connexion');
    });

    Route::get('/connexion', function () {
        return view('backend.login');
    });

    Route::get('/accueil', function () {
        return view('backend.home');
        //return view('backend.menu');
    });

    Route::post('/connexion', 'Auth\AuthController@login');

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/deconnexion', 'Auth\AuthController@logout');

        Route::get('/', function () {
            return view('backend.home');
        });
    });




});


Route::get('{locale}', function($locale) {
    app()->setLocale($locale);

    $activity = Activity::first();

    return view('activity')->with('activity', $activity);
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
