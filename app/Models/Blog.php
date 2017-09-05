<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    public function getRouteKeyName()
    {
        return 'post_slug';
    }

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class);
    }
}
