<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['path', 'adventure_id'];
    public function image()
    {
        return $this->belongsTo(Adventure::class,"id");
    }
}
