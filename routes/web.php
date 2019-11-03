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
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@sendMail');
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');
Route::get('/{tag}', 'BlogController@tag')->name('blog.tag');

Route::get('/web-design-development', 'PagesController@webdesign')->name('webdesign');
Route::get('/ecommerce-design-development', 'PagesController@ecommerce')->name('ecommerce');
Route::get('/web-application-development', 'PagesController@webapp')->name('webapp');
Route::get('/website-redesign', 'PagesController@redesign')->name('redesign');

Route::get('/search-engine-optimisation', 'PagesController@seo')->name('seo');
Route::get('/website-hosting-maintenance', 'PagesController@hosting')->name('hosting');
Route::get('/graphic-design', 'PagesController@design')->name('design');
Route::get('/logo-design', 'PagesController@logo')->name('logo');