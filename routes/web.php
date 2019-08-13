<?php

use Illuminate\Support\Facades\Input;

Auth::routes();

// Route::group(
    
    // function () {      


        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::resource('/customers', 'CustomerController');
        Route::resource('/technicians', 'TechicianController');
        
        Route::get('/services', 'ServiceController@index');
        Route::get('/services/{slug}', 'ServiceController@show');




        // Route::resource('/fire_alarms', 'FireAlarmController');
        // Route::resource('/cctv_cameras', 'CctvCameraController');
        // Route::resource('/brokers', 'BrokersController');

//    