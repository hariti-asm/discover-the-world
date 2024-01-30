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
        'publication_date',
        'country'
    ];
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
