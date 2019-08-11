<?php

use Illuminate\Support\Facades\Input;

Auth::routes();

// Route::group(
    
    // function () {      


        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::resource('/customers', 'CustomerController');
        Route::resource('/technicians', 'TechicianController');

        Route::resource('/fire_alarms', 'FireAlarmController');
        Route::resource('/cctv_cameras', 'CctvCameraController');
        Route::resource('/brokers', 'BrokersController');
        Route::resource('/services', 'ServiceController');

//    