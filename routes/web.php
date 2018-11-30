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
    return view('welcome');
});

Route::get('admin',function(){
  return redirect()->route('login');

});
 
 Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('login', 'Auth\LoginController@login')->name('postlogin');
 Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Auth::routes();

Route::get('/patient/dashboard', 'HomeController@index')->name('home');
Route::post('/savepatientimage', 'HomeController@savePatientImage')->name('savepatientimage');
Route::post('/saveimpressionshipped', 'HomeController@saveImpressionShipped')->name('saveimpressionshipped');

