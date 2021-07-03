<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index','xxxController@index');
Route::get('create','xxxController@create');
Route::post('store','xxxController@store');

Route::get('bulkdata','xxxController@bulkdata');
Route::post('bulk','xxxController@bulk');

Route::get('zzz/edit/{id}','xxxController@edit');
Route::put('zzz/update/{id}','xxxController@update');
Route::delete('zzz/delete/{id}','xxxController@destroy');
Route::post('zzz/restore/{id}','xxxController@restore');
Route::delete('zzz/Permanent_Delete/{id}','xxxController@delete');

Route::get('profile/index', 'profileController@index')->name('profile.index');
Route::get('profile/create', 'profileController@create')->name('profile.create');
Route::post('profile/store', 'profileController@store')->name('profile.store');

Route::get('profile/bulkupload','profileController@bulkupload')->name('profile.bulkupload');
Route::post('profile/bulk','profileController@bulk')->name('profile.bulk');

Route::get('profile/bulkimage','profileController@bulkimage')->name('profile.bulkimage');
Route::post('profile/multipleimage','profileController@multipleimage')->name('profile.multipleimage');


Route::get('profile/edit/{id}', 'profileController@edit')->name('profile.edit');
Route::put('profile/update/{id}', 'profileController@update')->name('profile.update');
Route::delete('profile/destroy/{id}', 'profileController@destroy')->name('profile.destroy');
Route::post('profile/restore/{id}', 'profileController@restore')->name('profile.restore');
Route::delete('profile/force_delete/{id}', 'profileController@delete')->name('profile.force_delete');
Route::delete('/selected-profiles', 'profileController@delete_all')->name('profile.deleteSelected');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
