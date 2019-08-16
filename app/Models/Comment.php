<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'content',
        'department',
        'post_id',
        'user_id',
        'status'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ticket()
    {
        return $this->hasMany('App\Models\Ticket','post_id');
    }
}
