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

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
