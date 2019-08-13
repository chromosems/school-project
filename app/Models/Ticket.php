<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = ([
        'title',
        'description',
        'location',
        'image',
        'user_id',
        'service_id',
        'status'
    ]);

    public function user()
    {
        return $this->BelongsTo(App\Models\User);
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function comments(){
      return $this->hasMany('App\Models\Comment','post_id');
   }

}
