<?php

use Illuminate\Support\Facades\Input;

Auth::routes();

     


        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::resource('/customers', 'CustomerController');
        Route::resource('/technicians', 'TechicianController');
        
        Route::get('/services', 'ServiceController@index');
        Route::get('/services/{slug}', 'ServiceController@show');

        Route::resource('/tickets', 'TicketController');
        
        Route::post('/comments', 'CommentsController@newComment');

        Route::get('sendemail', function () {
            $data = array(
                'name' => "Ticket",
            );
            Mail::send('mails.welcome', $data, function ($message) {
                $message->from('opudaemmanuel@gmail.com', 'Ticket');
                $message->to('opudaemmanuel@gmail.com');
            });

        });


  