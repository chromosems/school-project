<?php

namespace App\Models;

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
        'service_id',
        'phone_number',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
