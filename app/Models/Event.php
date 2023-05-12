<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{    public $table='events';
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        
    ];

    public function trip()
    {
        return $this->hasMany(Trip::class,'event_id');
    }
    
}
