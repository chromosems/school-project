<?php

namespace App\Models;

use App\Tag;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    
    public function scopeFilter($query, $filters)
    {
          if (isset($filters['month'])) {
            $query->whereMonth('created_at',Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])){
            $query->whereYear('created_at', $filters['year']);

        }

    }

    public static function achieves()
    {
       return static:: selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
