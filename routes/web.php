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
Auth::routes([
    'register' => true, // Registration Routes...
    'verify' => false // Email Verification Routes...
]);

Route::get('/change-password','App\Http\Controllers\Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password','App\Http\Controllers\Auth\ChangePasswordController@changepassword')->name('password.update');

Route::get('/', 'App\Http\Controllers\siteController@index')->name('home');

Route::get('/contact','App\Http\Controllers\siteController@contact')->name('contact');

Route::get('/error', 'App\Http\Controllers\siteController@error')->name('error');

Route::get('/about', 'App\Http\Controllers\siteController@about')->name('about');



Route::get('/projects', 'App\Http\Controllers\siteController@project')->name('project');

Route::post('/message/create','App\Http\Controllers\MessageController@store')->name('text');

Route::get('/portfolio', 'App\Http\Controllers\siteController@portfolio')->name('portfolio');

Route::get('/blog', 'App\Http\Controllers\siteController@blog')->name('blog');

Route::get('/history', 'App\Http\Controllers\siteController@history')->name('history');

Route::get('/career', 'App\Http\Controllers\siteController@career')->name('career');

Route::get('/faq', 'App\Http\Controllers\siteController@faq')->name('faq');

Route::get('/partnership', 'App\Http\Controllers\siteController@partnership')->name('partnership');

Route::get('/leadership', 'App\Http\Controllers\siteController@leadership')->name('leadership');

Route::get('/home', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@index'])->name('home');
Route::get('/admin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@index'])->name('admin');

// Route::get('/register', ['middleware' => 'auth', 'uses'=>'App\Http\Controllers\adminController@register'])->name('register');

//Route::get('/login', ['middleware' => 'auth', 'uses'=>'App\Http\Controllers\adminController@login'])->name('login');

Route::get('/logout', ['middleware' => 'auth', 'uses'=>'App\Http\Controllers\adminController@logout'])->name('logout');

Route::post('/addadmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@addadmin']);

Route::post('/addproject', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@store'])->name('storeproject');
Route::get('/addproject', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@addproject'])->name('addproject');
Route::get('/viewprojects', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@index'])->name('viewproject');
Route::get('/viewprojectid/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@viewprojectid'])->name('viewprojectid');
Route::get('/editproject/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@editproject'])->name('editproject');
Route::post('/updateproject/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@updateproject'])->name('updateproject');
Route::delete('/deleteproject/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@deleteproject'])->name('deleteproject');

Route::get('/viewusers', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@viewusers']);

Route::get('/viewteams', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@index'])->name('viewteams');
Route::get('/addteam', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@addteam'])->name('addteam');
Route::post('/addteammember',['middleware' => 'auth', 'uses'=>'App\Http\Controllers\teamController@store'])->name('addteammember');
Route::get('/editteam/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@editteam'])->name('editteam');
Route::post('/updateteam/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@updateteam'])->name('updateteam');
Route::delete('/deleteteam/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@deleteteam'])->name('deleteteam');

Route::get('/viewmessages', ['middleware' => 'auth','uses'=>'App\Http\Controllers\messageController@index'])->name('viewmessages');
Route::post('/createmessage',['middleware' => 'auth', 'uses'=>'App\Http\Controllers\messageController@store'])->name('createmessage');
Route::delete('/deletemessage/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\messageController@deletemessage'])->name('deletemessage');
Route::get('/viewamessage/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\messageController@viewamessage'])->name('viewamessage');


Route::get('/viewpartners', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@index'])->name('viewpartners');
Route::get('/addpartners', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@create']);
Route::post('/storepartner', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@store'])->name('storepartner');
Route::get('/editpartner/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@editpartner'])->name('editpartner');
Route::post('/updatepartner/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@update'])->name('updatepartner');
Route::delete('/deletepartner/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@deletepartner'])->name('deletepartner');


Route::get('/viewadmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@viewadmin'])->name('viewadmin');
Route::get('/addadmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@addadmin']);
Route::post('/addadmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@storeadmin'])->name('storeadmin');
Route::delete('/deleteadmin/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@deleteadmin'])->name('deleteadmin');



Route::get('/sliders', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@index'])->name('slider');
Route::get('/addsliders', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@addslider'])->name('addslider');
Route::post('/storeslider', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@store'])->name('storeslider');
Route::delete('/deleteslider/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@deleteslider'])->name('deleteslider');
Route::get('/editslider/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@editslider'])->name('editslider');
Route::post('/updateslider/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@updateslider'])->name('updateslider');


