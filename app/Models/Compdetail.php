<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compdetail extends Model
{
    //
    protected $fillable = [
        'bio',
        'name',
        'image',
        'location',
        'contact'
    ];
}
