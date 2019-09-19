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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@sendMail');

Route::get('/web_design_development', 'PagesController@webdesign')->name('webdesign');
Route::get('/ecommerce_design_development', 'PagesController@ecommerce')->name('ecommerce');
Route::get('/web_application_development', 'PagesController@webapp')->name('webapp');
Route::get('/website_redesign', 'PagesController@redesign')->name('redesign');

Route::get('/search_engine_optimisation', 'PagesController@seo')->name('seo');
Route::get('/website_hosting_maintenance', 'PagesController@hosting')->name('hosting');
Route::get('/graphic_design', 'PagesController@design')->name('design');
Route::get('/logo_design', 'PagesController@logo')->name('logo');