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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();



Route::resource('users', 'UserController');

Route::resource('business', 'BusinessController');

Route::resource('feedback', 'FeedbackController');

Route::resource('staff', 'EmployeeController');


Route ::get('/email',function(){

    return new appriasalsubmitted();
});


