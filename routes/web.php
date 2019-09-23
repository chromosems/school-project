<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Input;

Auth::routes();

Route::get('/tickets/tags/{tag}','TagsController@index');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::resource('/customers', 'CustomerController');
Route::resource('/technicians', 'TechicianController');

Route::get('/services', 'ServiceController@index');
Route::get('/services/{slug}', 'ServiceController@show');

Route::get('/companies', 'CompanyController@index');
Route::get('/companies/{id}', 'CompanyController@show');

Route::post('/tickets/{ticket}/comment', 'TicketController@newComment');

Route::resource('/tickets', 'TicketController');

Route::resource('/compdetails', 'CompdetailsController');

Route::get('sendemail', function () {
    $data = array(
        'name' => "Ticket",
    );

    Mail::send('mails.welcome', $data, function ($message) {
        $message->from('opudaemmanuel@gmail.com', 'Ticket');
        $message->to('opudaemmanuel@gmail.com');
    });
});
