<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
