<?php

/**
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|


/**
 * xử lý trang chủ
 */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

/**
 * xử lý đăng nhập, đăng ký
 */
Auth::routes();

/**
 * drive cho từng môn học
 */
Route::get('/course/{name}', 'CourseController@index');
