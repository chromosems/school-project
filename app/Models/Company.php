<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }


    public function technicians()
    {
        return $this->hasMany(Technician::class);
    }

}
