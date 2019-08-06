<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'photos';
    protected $fillable= ['path'];



    public function broker()
    {
        return $this->belongsTo('App\Models\Broker');
    }
}

