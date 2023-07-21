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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function(){
   
    Route::match(['get' , 'post'] ,'login' , 'AdminController@login')->name('login');
    Route::group(['middleware' => ['admin']] , function(){
        Route::get('dashboard' , 'AdminController@dashboard')->name('dashboard');
        Route::match(['get' , 'post'] , 'update-admin-password' , 'AdminController@updateAdminPassword')->name('update-admin-password');
        Route::match(['get' , 'post'] ,'update-admin-details' , 'AdminController@updateAdminDetails')->name('update-admin-details');
        Route::post('check-current-password' , 'AdminController@CheckCurrentPassword')->name('check-current-password');
        Route::get('logout' , 'AdminController@logout')->name('logout');
    });
});
