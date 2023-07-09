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

Route::get('/', "FrontController@index");
Route::get("services", "FrontController@services");
Route::get("events", "FrontController@events");
Route::get("articles", "FrontController@articles");
Route::get("articles/{slug}", "FrontController@articleDetails");
Route::get("about-us", "FrontController@about");
Route::get("contact-us", "FrontController@contact");
Route::get("login", "UserController@login");
Route::get("profile", "UserController@profile");
Route::get("book", "UserController@book");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
