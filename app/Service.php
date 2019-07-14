<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [];

    public function companies() {
        return $this->belongsToMany(Company::class);
    }

    public function technician () {
        return $this->belongsTo(Technician::class);
    }



}
