<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\PageController@index')->name('home');
Route::get('admin_dashboard', 'App\Http\Controllers\PageController@admin_dashboard')->name('admin_dashboard');
Route::get('admin_services', 'App\Http\Controllers\PageController@admin_services')->name('admin_services');
Route::get('admin_portfolio', 'App\Http\Controllers\PageController@admin_portfolio')->name('admin_portfolio');
Route::get('admin_about', 'App\Http\Controllers\PageController@admin_about')->name('admin_about');
Route::get('admin_contact', 'App\Http\Controllers\PageController@admin_contact')->name('admin_contact');

//Main Page Controller
Route::get('admin_main', 'App\Http\Controllers\MainPageController@index')->name('admin_main');
Route::put('admin_main_update', 'App\Http\Controllers\MainPageController@update')->name('admin_main_update');

