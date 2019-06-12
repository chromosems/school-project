<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    //
    protected $fillable=
        [
            'date',
            'brokers_name',
            'contact',
            'location',
            'address',
            'district',
            'price',
            'description',
            'image'

        ];
    public function photos()
    {
        return $this->hasmany('App\Photo');
    }
}
