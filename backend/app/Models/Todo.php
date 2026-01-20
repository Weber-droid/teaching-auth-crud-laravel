<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_completed',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCompleted($query)
    {
        return $query->where('is_completed', true);
    }

    public function scopePending($query)
    {
        return $query->where('is_completed', false);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', "%{$search}%");
    }

    public function scopeSearchByUserId($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeSearchByTitle($query, $title)
    {
        return $query->where('title', 'like', "%{$title}%");
    }

    public function scopeSearchByDescription($query, $description)
    {
        return $query->where('description', 'like', "%{$description}%");
    }

    public function scopeSearchByIsCompleted($query, $isCompleted)
    {
        return $query->where('is_completed', $isCompleted);
    }
}
