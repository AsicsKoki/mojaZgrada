<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable=['title','body','building_id'];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
