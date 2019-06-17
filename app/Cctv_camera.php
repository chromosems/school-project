<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cctv_camera extends Model
{
    //
    protected $fillable =
        [
            'date',
            'company_name',
            'location',
            'cameras',
            'phone_number',
            'email',
            'image',
            'bio',
        ];
}
