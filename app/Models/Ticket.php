<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = ([
        'title',
        'department',
        'description',
        'location',
        'image',
        'user_id',
        'slug',
        'status'
    ]);

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
