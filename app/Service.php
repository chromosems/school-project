<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [];

    public function company() {
        return $this->belongsTo();
    }

    public function technician () {
        return $this->belongsTo();
    }
}
