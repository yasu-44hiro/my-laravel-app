<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');

  public static $rules = array(
    'user_id' => 'integer',
    'category_id' => 'integer',
    'title' => 'required',
    'content' => 'required',
  );
  public function post()
    {
        return $this->belongsTo('App\Category' , 'category_id');
    }
}
