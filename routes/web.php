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

Route::get("/", "PagesController@index");

Route::get("/fastBoatSearch", "FastBoatSearchController@index");
Route::post("/fastBoatSearch", "FastBoatSearchController@store");
Route::post("/fastBoatSearch/selectReturn", "FastBoatSearchController@selectReturn");
Route::post("/fastBoatSearch/selectDepart", "FastBoatSearchController@selectDepart");

Route::resource("/fastBoatBooking", "FastBoatBookingDetailController")->only(["index", "store"]);
Route::resource("/fastBoatBooking/inputTravellers", "FastBoatBookingInputTravellersController")->only(["index", "store"]);
Route::resource("/fastBoatBooking/review", "FastBoatBookingReviewController")->only(["index", "store"]);

Route::resource("/complaint/new", "ComplaintController")->only(["index", "store"]);
Route::resource("/complaint/detail", "ComplaintDetailController")->only(["index", "store"]);

Route::resource("/dashboard", "DashboardController")->only(["index"]);
Route::put("/dashboard/profile", "DashboardProfileController@update");
Route::put("/dashboard/profile/password", "DashboardProfileController@changePassword");

Route::get("/fastBoatBooking/payment/finish", "FastBoatBookingPayment@finish");
Route::get("/fastBoatBooking/payment/unfinish", "FastBoatBookingPayment@unfinish");
Route::get("/fastBoatBooking/payment/error", "FastBoatBookingPayment@error");

Route::get("/tourSearch", "TourSearchController@index");

Route::get("/logout", "AuthenticationController@logout");
Route::get("/login", ["as" => "login", "uses" => "AuthenticationController@index"]);
Route::post("/login", "AuthenticationController@login");
Route::post("/register", "AuthenticationController@register");

