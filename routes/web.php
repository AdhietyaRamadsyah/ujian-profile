<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

/**
 * mendapatkan url atau route baru
 * untuk profile
 */

 Route::group(['prefix' => 'profile'], function(){
     Route::get('/index', 'Profile\ProfileController@index')->name('profile');
     Route::get('/profile', 'Profile\ProfileController@create')->name('profile.formulir');
     Route::get('laporan-profile', 'Laporan\ProfileController@index')->name('laporan.profile');
     Route::post('store','Profile\ProfileController@store')->name('profile.store');
     Route::get('edit/{profile}', 'Profile\ProfileController@edit')->name('profile.edit');
     Route::patch('update/{profile}','Profile\ProfileController@update')->name('profile.update');
     Route::get('/show/{profile}','Profile\ProfileController@show')->name('profile.show');
     Route::delete('delete/{profile}','Profile\ProfileController@destroy')->name('profile.delete');
 });