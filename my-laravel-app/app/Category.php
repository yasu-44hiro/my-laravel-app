<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function category()
    {
        return $this->hasOne('App\Post' , 'category_id');
    }

    public function categories()
    {
        return $this->hasMany('App\Post' , 'category_id');
    }

}
