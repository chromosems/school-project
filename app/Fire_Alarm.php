<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fire_Alarm extends Model
{
    //
    protected $fillable =
        [
            'company_name',
            'date',
            'location',
            'fire_alarm_type',
            'email',
            'phone_number',
            'image',
            'bio',

        ];
}
