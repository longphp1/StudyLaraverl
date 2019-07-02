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
Route::get('foo', function () {
    return 'Hello World';
});
Route::get('user/profile', function () {
    //
    return 'user/profile';
})->name('profile');

Route::get('user/{id}/profile', function ($id) {
    //
    $url = route('profile', ['id' => 1]);
    return 'url'.$url;
})->name('profile');

Route::get('user/{id}', 'UserController@show');

Route::domain('{account}.myapp.com')->group(function () {
    Route::get('usera/{id}', function ($account, $id) {
        //
    });
});


Route::get('/test_param/{id}','TestSomethingController@testParam');

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});