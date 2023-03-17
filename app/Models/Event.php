<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        
    ];
    public function features()
    {
        return $this->hasMany(Trip::class,'event_id');
    }
}
