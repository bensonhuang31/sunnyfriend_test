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

Route::get('/', function () {
    return view('index');
});



    Route::get('/lang/set/{lang}', 'LocaleController@set_lang');
    # other routes ...
/*Route::post('/', array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LocaleController@chooser'
   ));*/

