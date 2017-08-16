<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function icons(){
        return $this->belongsToMany(Icon::class);
    }
}
