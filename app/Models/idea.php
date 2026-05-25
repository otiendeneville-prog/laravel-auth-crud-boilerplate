<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


@property-read collecction, idea< $ideas; 

class idea extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'state'];
    protected $table = 'idea';
}
