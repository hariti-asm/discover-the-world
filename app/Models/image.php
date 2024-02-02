<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['path', 'adventure_id','destination_id'];
    public function aventures()
    {
        return $this->belongsTo(Adventure::class);
    }
    public function destinations()
    {
        return $this->belongsTo(Destination::class);
    }
   

}
