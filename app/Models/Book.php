<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{   
    use HasFactory;
    protected $fillable = ['name','email','start_data','end_data','pay','phone'];
    public function trip()
    {
        return $this->belongsTo(Trip::class,'trip_id');
        
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
        
    }

}
