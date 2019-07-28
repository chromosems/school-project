<?php

use Illuminate\Support\Facades\Input;

Auth::routes();

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::resource('/customers', 'CustomerController');
        Route::resource('/technicians', 'TechicianController');

        Route::resource('/fire_alarms', 'FireAlarmController');
        Route::resource('/cctv_cameras', 'CctvCameraController');
        Route::resource('/brokers', 'BrokersController');
        Route::resource('/access_controls', 'AccessControlsController');
        Route::resource('/services', 'ServiceController');

        /*Fire Alarm search*/
        Route::any('/search', function () {
            $search = Input::get('search');
            $fire_alarms = \App\Fire_Alarm::where('company_name', 'LIKE', '%' . $search . '%')->orWhere(
                'fire_alarm_type',
                'LIKE',
                '%' . $search . '%'
            )->orWhere('location', 'LIKE', '%' . $search . '%')->get();
            if (count($fire_alarms) > 0) {
                return view('welcome')->withDetails($fire_alarms)->withQuery($search);
            } else {
                return view('welcome')->withMessage('No Details found. Try to search again !');
            }
        });

        /*cctv camera search*/

        Route::any('/observe', function () {
            $observe = Input::get('observe');
            $cctv_cameras = \App\Cctv_camera::where('company_name', 'LIKE', '%' . $observe . '%')->orWhere(
                'cameras',
                'LIKE',
                '%' . $observe . '%'
            )->orWhere('location', 'LIKE', '%' . $observe . '%')->get();
            if (count($cctv_cameras) > 0) {
                return view('cctv_cameras.search')->withDetails($cctv_cameras)->withQuery($observe);
            } else {
                return view('cctv_cameras.search')->withMessage('No Details found. Try to search again !');
            }
        });

        /*Access control search*/
        Route::any('/access', function () {
            $access = Input::get('access');
            $access_controls = \App\Access_control::where('company_name', 'LIKE', '%' . $access . '%')->orWhere(
                'access_control',
                'LIKE',
                '%' . $access . '%'
            )->orWhere('phone_number', 'LIKE', '%' . $access . '%')->orWhere(
                    'location',
                    'LIKE',
                '%' . $access . '%'
                )->get();
            if (count($access_controls) > 0) {
                return view('access_controls.search')->withDetails($access_controls)->withQuery($access);
            } else {
                return view('access_controls.search')->withMessage('no Details found. try a gain later !');
            }
        });

        /* House renting search*/

        Route::any('/broker', function () {
            $broker = Input::get('access');
            $brokers = \App\Broker::where('brokers_name', 'LIKE', '%' . $broker . '%')->orWhere(
                'contact',
                'LIKE',
                '%' . $broker . '%'
            )->orWhere('location', 'LIKE', '%' . $broker . '%')->orWhere(
                'price',
                'LIKE',
                '%' .
                $broker . '%'
            )->get();
            if (count($brokers) > 0) {
                return view('brokers.search')->withDetails($brokers)->withQuery($broker);
            } else {
                return view('brokers.search')->withMessage('no Details found. try a gain later !');
            }
        });
    }
);
