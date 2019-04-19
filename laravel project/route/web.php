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
Route::get('/jet/form','jet@form');
Route::post('/jet/formdata','jet@formdata');

Route::get('/details','project@data');

Route::get('/ashish/form','ashish@form');
Route::get('/projects','ashish@projectlist');
Route::post('/ashish/formdata','ashish@formdata');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nodejs', function () {
    return view('nodejs');
});
Route::get('/projectDB', function () {
    return view('projectDB');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/first', function () {
    return view('firstpage');
});
Route::get('/open page', function () {
    return view('open page');
});
Route::get('/nav', function () {
    return view('navbar');
});

Route::get('/ca', function () {
    return view('caform');
});
Route::get('view_details','session_1819@index');
Route::post('/insert','table@formdata');



Route::get('/formhms', function () {
    return view('formhms');
});
Route::get('/studentpage', function () {
    return view('caform');
});
Route::get('/facultypage', function () {
    return view('caform');
});
Route::get('/studentdetails', function () {
    return view('caform');
});
Route::get('/hostelleaveapplication', function () {
    return view('caform');
});