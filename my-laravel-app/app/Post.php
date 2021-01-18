<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;

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

  public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }
    public function favorite_users()
    {
            return $this->belongsToMany('App\User','likes','post_id','user_id')->withTimestamps();
    }
}
