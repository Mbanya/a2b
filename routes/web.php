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

Route::get('about','PagesController@about')->name('about');
Route::get('contact','PagesController@contact')->name('contact');
Route::get('services','PagesController@services');
Route::get('featured','PagesController@featured')->name('featured');
Route::get('special_programs','PagesController@special_programs')->name('special');
Route::get('student_ambassador','PagesController@student_ambassador')->name('ambassador');
Route::get('platinum_plus','PagesController@platinum_plus')->name('platinum');
Route::get('employers','PagesController@employers')->name('employers');
Route::resource('news','PostController');
Route::get('post/{slug}','PostController@show');
Route::resource('apply','ApplyController');
Route::resource('employer','EmployersController');
Route::resource('internships','InternshipsController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
