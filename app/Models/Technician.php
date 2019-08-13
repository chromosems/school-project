<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    //
    protected $fillable = [
    'first_name',
        'image',
        'last_name',
        'company_id',
        'position',
        'job_type',
        'phone_number',
        'date',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
