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
    return view('login');
});

//login
Route::get('login', 'AdminLoginController@get_login')->name('login');
Route::post('post-login', 'AdminLoginController@postLogin')->name('postLogin');
Route::get('logout', 'AdminLoginController@logout')->name('logout');

//dashboard
Route::get('dashboard','DashboardController@view')->name('dashboard');

//master_user
Route::get('master-user','MasterUserController@show_table_user')->name('show_table_user');
Route::post('save-master-user','MasterUserController@add_user')->name('add_user');
Route::get('get-edit-user','MasterUserController@get_edit')->name('get_edit');
Route::post('save-edit-user','MasterUserController@update_user')->name('update_user');
Route::get('delete-user','MasterUserController@delete_user')->name('delete_user');

//master_kelas
Route::get('master-kelas','MasterKelasController@show_table_kelas')->name('show_table_kelas');
Route::post('save-master-kelas','MasterKelasController@add_kelas')->name('add_kelas');
Route::get('get-edit-kelas','MasterKelasController@get_edit')->name('get_edit');
Route::post('save-edit-kelas','MasterKelasController@update_kelas')->name('update_kelas');
Route::get('delete-kelas','MasterKelasController@delete_kelas')->name('delete_kelas');

//master pembimbing sekolah
Route::get('master-pembimbing','MasterPembimbingController@show_table_pembimbing')->name('show_table_pembimbing');
Route::post('save-master-pembimbing','MasterPembimbingController@add_pembimbing')->name('add_pembimbing');
Route::get('get-edit-pembimbing','MasterPembimbingController@get_edit')->name('get_edit');
Route::post('save-edit-pembimbing','MasterPembimbingController@update_pembimbing')->name('update_pembimbing');
Route::get('delete-pembimbing','MasterPembimbingController@delete_pembimbing')->name('delete_pembimbing');

//master pembimbing sekolah
Route::get('master-pembimbing_magang','MasterPembimbingMagangController@show_table_pembimbing_magang')->name('show_table_pembimbing_magang');
Route::post('save-master-pembimbing_magang','MasterPembimbingMagangController@add_pembimbing_magang')->name('add_pembimbing_magang');
Route::get('get-edit-pembimbing_magang','MasterPembimbingMagangController@get_edit')->name('get_edit');
Route::post('save-edit-pembimbing_magang','MasterPembimbingMagangController@update_pembimbing_magang')->name('update_pembimbing_magang');
Route::get('delete-pembimbing_magang','MasterPembimbingMagangController@delete_pembimbing_magang')->name('delete_pembimbing_magang');