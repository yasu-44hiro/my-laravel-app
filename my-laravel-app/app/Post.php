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

  public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    //後でViewで使う、いいねされているかを判定するメソッド。
    public function isLikedBy($user): bool {
        return Like::where('user_id', $user->id)->where('review_id', $this->id)->first() !==null;
    }
}
