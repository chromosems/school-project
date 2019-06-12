<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access_control extends Model
{
    //
    protected $fillable =
        [
            'date',
            'company_name',
            'location',
            'access_control',
            'phone_number',
            'email',
            'bio'
        ];
}
