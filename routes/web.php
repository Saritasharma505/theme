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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin/admin-store', 'AdminController@store')->name('admin.store');
Route::get('/admin/admin-delete/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/admin/admin-edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/admin/admin-update', 'AdminController@update')->name('admin.update');

Route::get('/member', 'MemberController@index')->name('index');

Route::get('/location', 'LocationController@index')->name('index');


