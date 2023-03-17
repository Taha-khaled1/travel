<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
        public function book()
    {
        return $this->hasMany(Book::class,'trip_id');
    }

    public function features()
    {
        return $this->hasMany(Features::class,'trip_id');
    }

    public function trip_details()
    {
        return $this->hasOne(TripDetalis::class, 'trip_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class,'event_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
        
    }
}
