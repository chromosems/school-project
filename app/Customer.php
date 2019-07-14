<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'date',
        'first_name',
        'last_name',
        'location',
        'image',
        'problem_description',
        'service',
        'phone_number'
    ];

}
