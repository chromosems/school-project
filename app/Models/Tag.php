<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function tickets()
    {

       return $this->belongsToMany(Ticket::class);
    }

    public function getRouteKeyName()
    {
        return 'name' ;
    }
}
