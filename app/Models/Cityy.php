<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table='cities';
    use HasFactory;
    public function country()
{
    return $this->belongsTo(Country::class,'country_id');
}
}
