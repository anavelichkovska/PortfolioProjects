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



Auth::routes();

Route::get('/', 'WelcomeConttroler@index')->name('welcome');
Route::get('/home', 'HomeController@index')
            ->name('home');
            //->middleware(['auth','checkUserRole']);
Route::get('/admin/posts', 'HomeController@adminPosts')->name('admin');
Route::get('/home/posts', 'HomeController@guestPosts')->name('guest');
Route::get('/home/create', 'HomeController@createPosts')->name('create');
Route::post('/home/store','HomeController@storePosts')->name('store');
Route::get('/home/edit/{id}','HomeController@editPosts')->name('edit');
Route::post('/home/edit/{id}','HomeController@updatePosts')->name('update');
Route::get('home/show/{id}','HomeController@showPost')->name('showpost');
Route::post('/home/show/{id}','HomeController@storeComment')->name('comment');
Route::get('/home/activate/{id}', 'HomeController@activatePost')->name('home.activate');
Route::get('/home/deactivate/{id}', 'HomeController@deactivatePost')->name('home.deactivate');
Route::get('home/delete/{id}','HomeController@destroy');