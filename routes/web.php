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
//Route::get("events/{id}/{slug}", "FrontController@eventDetails");
Route::get("articles", "FrontController@articles");
Route::get("articles/{id}/{slug}", "FrontController@articleDetails");
Route::get("about-us", "FrontController@about");
Route::get("login", "UserController@login");
Route::get("profile", "UserController@profile");
Route::get("book", "UserController@book");
Route::get("contact-us", "FrontController@contact");
Route::get("send-email", "FrontController@sendMail");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::delete("events/delete-event-image/{eventId}/{imageId}", "Admin\EventController@deleteImage")->name("voyager.event-images.delete");
});
