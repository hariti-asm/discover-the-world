<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
 protected $fillable=['continent','description'];

       public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function adventures()
    {
        return $this->hasMany(Adventure::class, 'destination_id');
    }
}