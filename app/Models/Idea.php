<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = [
        'idea',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
