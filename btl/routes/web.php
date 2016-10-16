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
 * hiển thị danh mục tài liệu từng môn học
 */
Route::get('/course/{courseID}/my-document/folder/{parentFolderID}', 'CourseController@showMyFolder');
Route::get('/course/{courseID}/shared-document/{parentFolderID}', 'CourseController@index');

/**
 * tạo thư mục mới
 */
Route::post('/course/{courseID}/my-document/add-folder/{parentFolderID}', 'CourseController@addFolder');

/**
 * upload tệp lên
 */
Route::post('/course/{courseID}/my-document/upload-file/{parentFolderID}', 'CourseController@uploadFile');