<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'country',
        "user_id",
        "destination_id"
    ];
    public function image()
    {
        return $this->hasMany(Image::class,"adventure_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
